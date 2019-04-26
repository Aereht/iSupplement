<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SigninRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:6|max:20',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'The email field is required!',
            'email.email' => 'The field must contain a valid email!',
            'password.required' => 'The password field is required!',
            'password.min' => 'The password must contain atleast 6 characters.',
            'password.max' => 'The password cannot contain more than 20 characters!',
        ];
    }
}