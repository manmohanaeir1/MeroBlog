<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;


class FrontendController extends Controller
{
    public function home(){
        return view('frontend.index');
    }
 
    public function about(){

        $about = About::where('status', 1)->first();

        
        return view('frontend.about_page', compact('about'));
    }
}
