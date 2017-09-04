<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'  => 'min:4|max:120|required',
            'email' => 'min:4|max:120|required|unique:users', /* a unique hay que pasarle el nombre de la tabla en la BD */
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Complete el nombre',
            'name.min'      => 'El nombre debe tener un mínimo de 4 caracteres',
        ];
    }
}
