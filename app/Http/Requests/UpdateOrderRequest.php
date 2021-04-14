<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
                'name' => 'required|max:45',
                'last_name' => 'required|max:45',
                'phone' => 'required|max:15',
                'email' => 'required|max:320',
                'bussines' => 'max:45',
                'product' => 'required|max:80',
                'additional_info' => 'max:150',
                'status' => 'required|max:1',
                'price' => 'max:10',
                'work_performed' => 'max:80',
                'notes_for_client' => 'max:100',
        ];
    }
}
