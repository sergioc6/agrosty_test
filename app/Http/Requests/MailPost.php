<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailPost extends FormRequest
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
            'from_name' => 'required|string|max:255',
            'from_email' => 'required|email|string|max:255',
            'subject_id' => 'required|integer|gt:0|exists:subjects,id',
            'body' => 'required|string'
        ];
    }
}
