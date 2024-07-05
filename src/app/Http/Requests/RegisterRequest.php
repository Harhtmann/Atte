<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required | string | max:100',
            'email' => 'required | email | string | max:255',
            'password' => 'required | min:8 | max:100',
            'password_confirmation' => 'required | min:8 | max:100'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.string' => '文字型で入力してください',
            'name.max' => '100文字以内で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メール型で入力してください',
            'email.string' => '文字型で入力してください',
            'email.max' => '255文字以内で入力してください',
            'password.required' => 'パスワードを入力してください',
            'password.min' => '8文字以上で入力してください',
            'password.max' => '100文字以下で入力してください',
            'password_confirmation.required' => '確認用パスワードを入力してください',
            'password_confirmation.min' => '8文字以上で入力してください',
            'password_confirmation.max' => '100文字以下で入力してください'
        ];
    }
}
