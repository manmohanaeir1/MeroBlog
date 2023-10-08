<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutReqest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required | max:255 | min:3 ',
            'short_description' => 'required | min:3  ',
            'long_description' => 'required  | min:3 ',
            'image' => 'required | mimes:jpg,jpeg,png,gif | max:2000 ',

      
    
        ];
    }

         /**
     * Get the error messages for the defined validation rules.
     */ 
    public function messages(): array
    {
        return [
            'title.required' => 'Title is required',
            'title.min' => 'Title is required',
            'short_description.required' => 'Short Description is required',
            'long_description.required' => 'Long Description is required',
            'image.required' => 'Image is required',
        ];
    }


    }


