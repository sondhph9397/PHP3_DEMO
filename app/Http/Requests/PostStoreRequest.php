<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return true để áp dụng rules bên dưới, false là không dùng gì.
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
            'desc' => 'max:100',
            'content' => 'required|max:1000'
        ];
    }
    // tạo hàm messages để hiện thông báo lỗi
    public function messages()
    {
        return [
            'desc.max' => 'Toi da 255 ky tu',
            'content.required' => 'hay nhap content'
        ];
    }
}
