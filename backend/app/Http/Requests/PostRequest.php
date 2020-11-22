<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'name'    => 'required',
            'comment' => 'required|string',
            'img'     => 'required|image|mimes:jpeg,png,jpg,gif|max:3000',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => '商品名は必ず入力して下さい。',
            'comment.required'  => 'コメントは必ず入力して下さい。',
            'img.required'      => '画像を10MB以内でアップロードして下さい(jpg、png、bmp、gif対応)',
            'image'             => '指定されたファイルが画像ではありません。',
            'mimes'             => '指定された拡張子（JPEG/PNG/JPG/GIF）ではありません。',
            'max'               => '3Ｍを超えています。',
        ];
    }
}
