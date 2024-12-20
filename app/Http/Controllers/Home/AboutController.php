<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAboutReqest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\About;
use App\Models\AboutMultiImages;
use Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about_page.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $about = About::all();
        return view('admin.about_page.about_page_all', compact('about'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
     
        $data = $request->all();

        $rules =    [
            'title' => 'required | max:255  ',
            'sub_title' => 'required | max:255  ',
            'short_description' => 'required  ',
            'long_description' => 'required  ',
            'about_image' => 'required | mimes:jpg,jpeg,png,gif | max:2000 ',
 
        ];

        $msg = [
            'title.required' => 'Title is required',
            'sub_title.required' => 'Sub Title is required',
            'short_description.required' => 'Short Description is required',
            'long_description.required' => 'Long Description is required',
            'about_image.required' => 'Image is required',
            'about_image.mimes' => 'Image type is required',
  
        ];

       $this->validate($request, $rules, $msg);
      

       $about = About::create($data);

        $about->save();
        if($request->file('about_image')){
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            // auto make image ffolder 

            Image::make($image)->resize(523,605)->save('upload/about/'.$name_gen);

            $save_url = 'upload/about/'.$name_gen;
             
            $about->about_image = $save_url;
            $about->save(); 

            
            $notification = array(  
                'message' => 'About page content with image created Successfully',
                'alert-type' => 'success'
            );

           
        }

        // for multiimage 

        if($request->hasFile('multi_images')){
            $files = $request->file('multi_images');
            foreach($files as $file)
            {
                $imageName = time(). '_' . $file->getClientOriginalName();
                $request['about_id'] = $about->id;
                $request['images'] =  $imageName;
                $file->move(public_path('upload/about/multi_images'), $imageName);
                AboutMultiImages::create($request->all());
        
               
                
                
            }

           
        }

        
        // for order 
       
        // for status  from about model
        if($request->status){
            $about->status = 1;
        }else{
            $about->status = 0;
        }

           
        $about->save();

 
        return redirect()->route('index.about')->with($notification);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about = About::find($id);
        return view('admin.about_page.edit_about', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Retrieve the 'about' entity
       
    $id = $request->id;
    $data = $request->all();
            // Validate the request
            $rules =    [
                'title' => 'required | max:255  ',
                'sub_title' => 'required | max:255  ',
                'short_description' => 'required  ',
                'long_description' => 'required  ',
                'about_image' => '  mimes:jpg,jpeg,png,gif | max:2000 ',
            ];

            $msg = [
                'title.required' => 'Title is required',
                'sub_title.required' => 'Sub Title is required',
                'short_description.required' => 'Short Description is required',
                'long_description.required' => 'Long Description is required',
                'about_image.mimes' => 'Image type is required',
            ];

              $this->validate($request, $rules, $msg);
            $about = About::find($id);
            // Update the entity with the validated data
            $about->update($data);

            // Store the entity
            $about->save();


            if($request->file('about_image')){
                $image = $request->file('about_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                // auto make image ffolder 
               

                Image::make($image)->resize(523,605)->save('upload/about/'.$name_gen);

                $save_url = 'upload/about/'.$name_gen;
                 
                $about->about_image = $save_url;
        
            }
            $notification = array(  
                'message' => 'About page content with image created Successfully',
                'alert-type' => 'success'
            );

            // for order

            // for status  from about model
            if($request->status){
                $about->status = 1;
            }else{
                $about->status = 0;
            }

            $about->save(); 
            return redirect()->route('index.about')->with($notification);   
    }
       

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $about = About::find($id);
        unlink($about->about_image);
        $about->delete();
        $notification = array(  
            'message' => 'About page content with image deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('index.about')->with($notification);
        
    }
}
