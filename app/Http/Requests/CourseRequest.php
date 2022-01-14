<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'name' => 'required|max:255',
            'image' => 'required|mimes:jpeg,jpg,png|max:10000',
            'description' => 'required',
            'cat_id' => 'required|exists:categories,id',
            'levels' => 'required|in:beginner,intermediate,high',
            'hours' => 'required|numeric',
        ];
    }
}
