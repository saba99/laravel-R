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
            'title'=>['required','max:2',new Uppercase()],
            'description'=>'required'
        ];
    } 
    public function message(){

        return[

            'title.required' => 'لطفا عنوان مطلب مورد نظر خود را انتخاب نمایید',
         'title.max'=>'تعداد کاراکتر های شما باید بیش از  دو کاراکتر باشد',
         'description.required'=>'لطفا توضیحات مطلب مورد نظر خود را وارد نمایید',
        ];
    }
}
