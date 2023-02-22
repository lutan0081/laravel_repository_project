<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class EmailRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email'],
            'contents' => ['required', 'max:1000'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '氏名は必須項目です',
            'name.max' => '氏名は100文字以内で入力してください',
            'email.required' => 'emailは必須項目です',
            'email.email' => 'emailの形式が不正です',
            'contents.required' => '内容は必須項目です',
            'contents.max' => '内容の文字数が超過しています',
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
