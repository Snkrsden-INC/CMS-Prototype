<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' =>['required'],
            'ticker' =>['required'],
            'condition' =>['required'],
            'desc' =>['required', 'min:10'],
            'content' =>['required', 'min:10'],
            'colorway' =>['required'],
            'style' =>['required'],
            'image' =>['required', 'image'],
            'release_date' => ['required'],
            'price' => ['required', 'numeric', "between:0, $price_value"]
        ];
    }
}
