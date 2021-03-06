<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'fname' => 'required|max:45',
            'lname' => 'required|max:45',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:6',
            'email' => 'required|max:320',
            'bussines' => 'max:45',
            'product' => 'required|max:45',
            'additional_info' => 'max:150',
        ];
    }
}
