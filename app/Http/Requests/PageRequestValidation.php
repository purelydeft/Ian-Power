<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequestValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
 

            public function rules()
        {
            return [
                'title' => 'required|max:255',
                'description' => 'required',
                'description2' => 'required',
                'description3' => 'required',
                'description4' => 'required',
                
            ];
        }

        public function messages()
{
    return [
        'title.required' => 'Page Title is Required',
        'title.max'=>'Page Title not more than 255',
        'description.required' => 'Page Description is required',
        'description2.required' => 'Page Description is required',
        'description3.required' => 'Page Description is required',
        'description4.required' => 'Page Description is required',
    ];
}
}
