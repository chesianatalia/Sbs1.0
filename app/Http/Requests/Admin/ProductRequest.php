<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'title' => 'required|max:255',
        'photo' =>'required|image',
        'description'=>'required',
        'material'=>'required',
        'stepbystep'=>'required',
        'user_id'=>'required|exists:users,id',
        'comment_id'=>'exists:comments,id',
        'like_id'=>'exists:likes,id',
        'categories_id'=>'required|exists:categories,id',
        ];
    }
}
