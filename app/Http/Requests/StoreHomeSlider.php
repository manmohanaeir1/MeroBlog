<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHomeSlider extends FormRequest
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
            'title' => 'required|string|max:255',
            'sub_title' => 'required|string|max:255',
            'home_slider' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Video_url' => 'required|string|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
        {
            return [
                'title.required' => 'Title is required!',
                'sub_title.required' => 'Sub Title is required!',
                'home_slider.required' => 'Home Slider is required!',
                'Video_url.required' => 'Video Url is required!',
            ];
        }
}
