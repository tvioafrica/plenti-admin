<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EarnPointsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
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
            'amount_spent' => ['required','numeric', 'min:100', 'max:9999999999999'],
            'transaction_type' => ['required','string'],
        ];
    }
}
