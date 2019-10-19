<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => 'required|unique:posts|max:255',
            'description' => 'required',
            'file' => ['required','max:2000','mimes:jpeg,png,jpg']
        ];
    }

    public function messages()
    {
//        return ['tilte.required'=>'لطفا عنوان را وارد کنید',
//                'title.Max'=>'لطفا بیش از 2 کاراکتر وارد نکنید',
//                'description.required'=>'لطفا متن مورد نظر خود را وارد کنید'];
        return [
            'title.required' => 'A title is required',
            'title.max'=>'num of char is 50',
            'description.required'  => 'A message is required',
            'file.required' => 'لطفا تصویر اصلی این مطلب را مشخص کنید',
            'file.max' => 'حجم تصویر شما نباید بیش از ا مگا بایت باشد',
            'file.mimes' => 'این فرمت مورد قبول نیست'
        ];

    }
}
