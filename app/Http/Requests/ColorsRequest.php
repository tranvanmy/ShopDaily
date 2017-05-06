<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColorsRequest extends FormRequest
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
            'color' => 'required|unique:Colors,Color_name',
        ];
    }
    public function messages()
    {
        return [
          'color.required' => 'Vui lòng nhập tên màu',
          'color.unique' => 'Tên màu đã tồn tại',
        ];
    }
}
