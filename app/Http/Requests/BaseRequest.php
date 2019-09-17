<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Factory as ValidationFactory;
use Response;

class BaseRequest extends FormRequest
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
    * [failedValidation [Overriding the event validator for custom error response]]
    * @param  Validator $validator [description]
    * @return [object][object of various validation errors]
    */
    public function failedValidation(Validator $validator) { 
         //write your bussiness logic here otherwise it will give same old JSON response
        throw new HttpResponseException(
            response()->json([
              'success' => 'false',
              'message' => 'The given data was invalid.', 
              'errors' => $validator->errors(), 
              'status_code' => 422
            ], 422)
        ); 
    }  
}
