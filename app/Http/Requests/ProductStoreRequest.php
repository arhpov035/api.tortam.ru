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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'required',
            'category_id' => 'required',
            'slug' => 'required|max:255|unique:App\Models\Product,slug',
            'name' => 'required|max:150|unique:App\Models\Product,name',
            'image' => '',
            'intro_text' => '',
            'description' => '',
            'published' => 'required',
        ];
    }
}
