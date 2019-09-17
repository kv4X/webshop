<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BaseRequest;

class AuthRegisterRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:4|max:30',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|max:255|confirmed',
            'password_confirmation' => 'required|string|min:8|max:255',
            'location' => 'required|string|min:2|max:255',
            'country' => 'required|string|min:2|max:5',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
        ];
    }
}
