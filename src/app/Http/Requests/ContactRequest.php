<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

    public function messages()
    {
        return[
            'name.required' => '名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            //'tell.required' => '電話番号を入力してください',
            //'tell.integer' => '数値を入力してください',
            //'tell.min' => '電話番号を入力してください',
            //'tell.max' => '電話番号を入力してください'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            //'tell' => 'required|integer|min:10|max:11'
        ];
    }
}
