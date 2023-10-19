<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.index');
    }
 
    public function about(){

        $about = About::where('status', 1)->first();

        
        return view('frontend.about_page', compact('about'));
    }

    public function service(){

        return view('frontend.services');
    }

    public function portfolio(){

        return view('frontend.portfolio');
    }

    public function blog(){

        return view('frontend.blog');
    }

    public function contact(){

        return view('frontend.contact');
    }







    public function contact_register(Request $request){
        $data = $request->all();
        $rules =    [
            'name' => 'required | max:255  ',
            'address' => 'required | max:255  ',
            'email' => 'required |email',
            'number' => 'required  ',
            'message' => 'required | max:255  ',
        ];

        $msg = [
            'name.required' => 'Name is required',
            'address.required' => 'Address is required',
            'email.required' => 'email is required',
            'number.required' => 'number is required',
            'message.required' => 'message is required',
            
        ];

       $this->validate($request, $rules, $msg);

       $contact = Contact::create($data);


       $notification = array(  
        'message' => 'contact details created Successfully',
        'alert-type' => 'success'
            );

       $contact->save();

       return redirect()->back()->with($notification); 
       }

}
