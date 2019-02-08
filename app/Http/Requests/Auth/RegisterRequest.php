<?php

namespace App\Http\Requests\Auth;

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
        $rule = [
            'name'     => [
                'required'
            ],
            'email'    => [
                'required|unique:users,email|email'
            ],
            'password' => [
                'required'
            ]
        ];

        return $rule;
    }

    public function messages()
    {
        return [
            'name.required'      => '名前は必須です。',
            'email.required'     => 'メールアドレスは必須です。',
            'email.email'        => 'メールアドレスを正しい形式にしてください。',
            'email.unique:users' => 'すでに登録されているアドレスです。',
            'password.required'  => 'パスワードは必須です。'
        ];
    }
}
