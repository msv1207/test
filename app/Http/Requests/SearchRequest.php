<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
            'name' => 'nullable|max:255|string',
            'price' => 'nullable|array',
            'price.*' => 'nullable|Numeric|max:255',
            'bathrooms' => 'nullable|max:255|Numeric',
            'bedrooms' => 'nullable|max:255|Numeric',
            'storeys' => 'nullable|max:255|Numeric',
            'garages' => 'nullable|max:255|Numeric',
        ];
    }
}
