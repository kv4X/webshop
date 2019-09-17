<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BaseRequest;

class AuthUpdateRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|min:4|max:30',
            //'password' => 'string|min:8|max:255|confirmed',
            'location' => 'string|min:2|max:255',
            'country' => 'string|min:2|max:5',
            'phone_number' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
        ];
    }
}
