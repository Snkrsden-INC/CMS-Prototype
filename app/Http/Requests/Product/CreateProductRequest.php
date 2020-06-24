<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
        $price_value = 1000000;
        return [
            'name' =>['required', 'unique:products'],
            'desc' =>['required', 'min:10'],
            'image' =>['required', 'image'],
            'release_date' => ['required'],
            'price' => ['required', 'numeric', "between:0, $price_value"]
        ];
    }
}
