<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicacionesCreateRequest extends FormRequest
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
            'titulo' => 'required',
            'cuerpo' => 'required',
            'habitantes_id '=> 'disabled',

           // 'correo' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'El titulo es requerido debe ser un campo requerido',
            'cuerpo.required' => 'El detalle escrito debe ser un campo requerido',
            'habitantes_id.required' => 'El correo debe ser un campo requerido',
            //'correo.email' => 'El correo debe tener un formato correcto',
        ];
    }
}
