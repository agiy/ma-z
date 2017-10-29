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
     * @return array
     */
    public function rules()
    {
        return [
            'name'                 => 'required|string|max:255',
            'email'                => 'required|email|max:255',
            'contact_message'              => 'required|string|max:10000',
            'g-recaptcha-response' => 'required|captcha',
        ];
    }

    public function attributes()
    {
        return [
            'email.required'                => 'Eメールは必須です。',
            'email.email'                   => 'Eメールの形式が正しくありません。',
            'email.max'                     => 'Eメールは255文字以内で入力してください。',
            'g-recaptcha-response.required' => '「私はロボットではありません」の左にチェックを入れてください。',
            'g-recaptcha-response.captcha'  => '「私はロボットではありません」のチェック結果が確認できませんでした。',
        ];
    }
}

