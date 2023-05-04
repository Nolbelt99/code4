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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'category_id' => 'required',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Megnevezés kötelező!',
            'price.required' => 'Ár megadása kötelező!',
            'image.required' => 'Kép feltöltése kötelező!',
            'image.image' => '',
            'image.mimes' => 'Csak jpg, jpeg vagy png típusú képet lehet feltölteni.',
            'category_id.required' => 'Kategória megadása kötelező!',
            'name.max' => 'Maximum 255 karakter szerepelhet benne!!'
        ];
    }
}
