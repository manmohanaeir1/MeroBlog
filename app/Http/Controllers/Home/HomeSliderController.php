<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;

use Image;


class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeSlide = HomeSlider::find(1);
        return view('admin.home_slide.home_slide_all', compact('homeSlide'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
        $slide_id = $request->id;

        
    
        if($request->file('home_slider')){
            $image = $request->file('home_slider');
            
            @unlink(public_path('upload/home_slider/' .$slide_id->home_slider));
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            // auto make image ffolder 
            // w/h
            Image::make($image)->resize(1200,1000)->save('upload/home_slider/'.$name_gen);

            $save_url = 'upload/home_slider/'.$name_gen;
             

            $slide = HomeSlider::findOrFail($slide_id)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'video_url' => $request->video_url,
                'home_slider' => $save_url,

            ]);
            $notification = array(  
                'message' => 'Home slide Updated  with image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
        else
        {
            $slide = HomeSlider::findOrFail($slide_id)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'video_url' => $request->video_url,
            ]);
            $notification = array(  
                'message' => 'Home slide Updated  without image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }


       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
