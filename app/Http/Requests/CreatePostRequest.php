<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Uppercase;

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
            'title'=>['required','max:50',new Uppercase()],
            'description'=>'required',
            'file'=>['required','max:1000','mimes:jpeg,png,jpg'],
        ];
    } 
    public function message(){

        return[

            'title.required' => 'لطفا عنوان مطلب مورد نظر خود را انتخاب نمایید',
         'title.max'=>'تعداد کاراکتر های شما باید بیش از  دو کاراکتر باشد',
         'description.required'=>'لطفا توضیحات مطلب مورد نظر خود را وارد نمایید',
         'file.required'=>'لطفا تصویر اصلی این مطلب را مشخص نمایید',
         'file.max'=>'فایل ارسالی شما نباید بیش از یک مگابایت باشد',
         'file.mimes'=>'باشد jpg یا pngنوع تصویر مطلب شما باید' 
          
        ];
    }
}
