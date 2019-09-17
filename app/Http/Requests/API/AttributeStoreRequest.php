<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BaseRequest;

class AttributeStoreRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'subcategory_id' => 'required|numeric|digits_between:1,11',
            'name' => 'required|string|min:4|max:30',
            'dropdown' => 'required|numeric|between:0,1'
        ];
    }
}
