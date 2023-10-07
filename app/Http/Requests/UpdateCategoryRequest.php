<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Validation\Rule; // Add this line

class UpdateCategoryRequest extends FormRequest
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
            //
            // 'name'=>'required|unique:categories|min:3'
            'name'=> ['required' ,  Rule::unique('categories')->ignore($this->category)]
        ];
    }
    function messages(){
        return [
            'name.required'=>'Category must have name',
            'name.min'=>'Category name should be at least 3 char.'
        ];
    }
}
