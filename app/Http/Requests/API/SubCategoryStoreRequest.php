<?php
namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BaseRequest;

class SubCategoryStoreRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => 'required|numeric|digits_between:1,11'
            'name' => 'required|string|min:2|max:30',
            'description' => 'required|string|max:255'
        ];
    }
}
