<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_id'=>'required|integer',
            'name'=>'required|string',
            'slug'=>'required|string|max:255',
            'brand'=>'required|string|max:255',
            'samll_description'=>'required|string',
            'description'=>'required|string',
            'original_price'=>'required|integer',
            'selling_price'=>'required|integer',
            'quantity'=>'required|integer',
            'trinding'=>'nullable',
            'status'=>'nullable',
            'meta_title'=>'required|string|max:255',
            'meta_description'=>'required|string',
            'meta_keyword'=>'required|string',
            // 'image'=>'image|mimes:png,jpg,jpeg'
        ];
    }
}
