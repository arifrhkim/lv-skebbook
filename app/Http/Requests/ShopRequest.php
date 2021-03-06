<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
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
            'name' => 'required|max:255',
            'tagline' => 'required|max:255',
            'email' => 'required|email',
            'address' => 'required',
            'province_id' => 'required|numeric',
            'city_id' => 'required|numeric',
        ];
    }
}
