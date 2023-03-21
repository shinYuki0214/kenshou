<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'company'   => ['required', 'string', 'max:30'],
            'name'      => ['required', 'string', 'max:30'],
            'name_kana' => ['required', 'string', 'max:30', 'regex:/^[ァ-ロワンヴー]*$/u'],
            'phone'     => ['required', 'regex:/^0(\d-?\d{4}|\d{2}-?\d{3}|\d{3}-?\d{2}|\d{4}-?\d|\d0-?\d{4})-?\d{4}$/'],
            'email'     => ['required', 'email'],
            'category'      => ['required'],
            'body'      => ['nullable', 'string', 'max:1000'],
            'confirm'      => ['required'],
        ];
        return $rules;
    }


    /**
     * エラーメッセージ
     */
    public function messages()
    {
        // 
        return [
            'name.required' => ':attributeは必須項目です。',
            'phone.regex'   => ':attributeが正しくありません。'
        ];
    }


    /**
     * 属性名
     * /lang/ja/validation.php で指定した内容を変更する場合に設定
     */
    public function attributes()
    {
        // 
        return [
            'company'   => '会社・組織名',
            // 'name'      => '氏名',
            // 'name_kana' => 'フリガナ',
            // 'phone'     => '電話番号',
            // 'email'     => 'メールアドレス',
            'category'      => 'ご用件',
            'body'      => 'ご用件の詳細'
        ];
    }
}
