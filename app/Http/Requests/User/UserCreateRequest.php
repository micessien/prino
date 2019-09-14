<?php

namespace App\Http\Requests\User;

use App\Rules\Captcha;
use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'entreprise' => 'max:255',
            'genre' => 'required',
            'telephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:4|same:password_confirmation',
            'password_confirmation' => 'required|min:4|same:password',
            'g-recaptcha-response' => new Captcha(),
        ];
    }
}
