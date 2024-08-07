<?php

namespace App\Http\Requests\Drone;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'amount' => 'nullable|integer',
            'group_id' => 'nullable|integer',
            'manufacturer_id' => 'nullable|integer',
            'subcategories' => 'nullable|array'
        ];
    }
}
