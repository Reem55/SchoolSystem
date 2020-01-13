<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StudentRegisterRequest.
 */
class ParentLoginRequest extends FormRequest
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
            'user_name' => 'required|max:190',
            'password' => 'required',
            // 'token' => 'required',
            // 'device' => 'required|in:android,ios',
        ];
    }

    public function attributes()
    {
        return [
            'user_name' => 'Username',
            'password' => 'Password',
        ];
    }
}
