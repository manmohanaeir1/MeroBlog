<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAboutReqest;
use Illuminate\Http\Request;

use App\Models\About;
use Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about_page.about_page_all', compact('about'));
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

        // for order 
       
        // for status  from about model
        if($request->status){
            $about->status = 1;
        }else{
            $about->status = 0;
        }

           
        $about->save();

        return redirect()->back()->with($notification);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
