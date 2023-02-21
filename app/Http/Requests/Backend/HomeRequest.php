<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class HomeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'max:100'],
            'post_number' => ['required', 'max:10'],
            'address' => ['required', 'max:100'],
            'tel' => ['required'],
            'fax' => ['required'],
        ];
    }

    public function messages()
    {
        return [

            'name.required' => '氏名は必須項目です',
            'name.max' => '氏名は100文字以内で入力してください',
            'post_number.required' => '郵便番号は必須項目です',
            'post_number.max' => '郵便番号は10文字以内で入力してください',
            'address.required' => '住所は必須項目です',
            'address.max' => '住所は100文字以内で入力してください',
            'tel.required' => 'TELは必須項目です',
            'fax.required' => 'FAXは必須項目です',
        ];
    }

    protected function failedValidation(Validator $validator)
    {

        // $data = [
        //     'status' => 'error',
        //     'summary' => 'Failed validation.',
        //     'errors' => $validator->errors()->toArray(),
        // ];

        // // throw new HttpResponseException(response()->json($data, 422));
        // throw new HttpResponseException(response()->json($data));
    }
}
