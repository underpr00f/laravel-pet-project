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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'email' => 'Email',
            'message' => 'Message'
        ];
    }
    public function messages()
    {
        return [
            // 'email.required' => 'Поле Email не может быть пустым',
            // 'password.required' => 'Поле Пароль не может быть пустым'
            'required' => 'Поле :attribute не может быть пустым.'
        ];
    }
    public function rules()
    {
        return [
            'email' => ['required','email','min:5','max:50'],
            'message' => ['required']
        ];
    }
}
