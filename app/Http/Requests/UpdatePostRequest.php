<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            "title" => "required|min:3|unique:posts,title,".$this->route("post")->id,
            "category" => "required|exists:categories,id",
            "photos.*" => "mimes:jpg,jpeg,png,bmp|",
            "description" => "required|min:10",
            "featured_image" => "nullable|mimes:jpg,jpeg,png,bmp|file|max:512"
        ];
    }
}
