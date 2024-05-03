<?php

namespace App\Http\Requests\Accessory;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'image_url' => 'nullable|url',
            'dimensions' => 'nullable|string',
            'weight' => 'nullable|string',
            'color'=> 'nullable|string',
            'type'=> 'nullable|string',
            'category_id' => 'integer',
            'manufacturer_id' => 'string',
        ];
    }
}
