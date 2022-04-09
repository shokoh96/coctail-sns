<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'name' => 'required',
            'material' => 'max:300',
            'message' => 'max:500',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '名前',
            'material' => '作り方',
            'message' => 'コメント',
        ];
    }
}