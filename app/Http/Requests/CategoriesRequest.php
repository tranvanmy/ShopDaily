<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
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
           'name' => 'required|unique:Categories,Cate_name',
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'Vui lòng nhập tên danh mục',
          'name.unique' => 'Tên danh mục đã tồn tại',
        ];
    }
}
