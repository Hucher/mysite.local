<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
            'title' => 'required',
            'img' => 'required',
            'news' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'поле title не заполнено',
            'img.required' => 'поле img не заполнено',
            'news.required' => 'поле news не заполнено'
        ];
    }
}
