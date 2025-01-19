<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            // 'product_name' => 'required|max:255',
            // 'price' => 'required|integer|min:1',
            // 'vendor_code' => 'exists:vendors,vendor_code',
            'image' => 'image|max:2048'
        ];
    }
}
