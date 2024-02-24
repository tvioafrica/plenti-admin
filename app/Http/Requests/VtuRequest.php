<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VtuRequest extends FormRequest
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
            'mobile' => 'required|max:255',
            'network' => 'required',
            'paymentcode' => 'required',
            'amount_spent' => 'required',
            'reward'=>'required'
        ];
    }
}
