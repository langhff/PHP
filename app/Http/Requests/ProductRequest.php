<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules = [
            'code' => 'required|min:3|max:255',
            'name' => 'required|min:3|max:255',
            'price' => 'required|numeric|min:0.01|max:9999999',
        ];

        if ($this->route()->named('products.store'))
        {
            $rules['code'] .= '|unique:products,code';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'required' => 'Field :attribute is required',
        ];
    }
}
