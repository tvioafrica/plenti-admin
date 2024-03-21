<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmailNSmsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title'        => [
                'required',
                'string',
                'max:255',
            ],
            'content'     => ['required', 'string', 'max:2000'],
            'recipients'  => ['nullable', 'string'],
            'type_of'     => ['required', 'numeric'],
            'branch_id'   => ['nullable', 'numeric']

        ];
    }
}
