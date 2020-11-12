<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HabitanteCreateRequest extends FormRequest
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



/*

 $habitantes=new Habitante;
		 $habitantes->documentoidentidad=$request->get('documento');
		  $habitantes->primer_nombre=$request->get('pnombre');
		   $habitantes->segundo_nombre=$request->get('snombre');
			$habitantes->primer_apellido=$request->get('papellido');
			 $habitantes->segundo_apellido=$request->get('sapellido');
              $habitantes->telefono=$request->get('telefono');
              $habitantes->correo=(string)$request->get('correo');
              $habitantes->fecha=$request->get('fecha');
			   $habitantes->save();
				return Redirect::to('habitante');


*/


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'documento'=> 'required',
            'pnombre'=> 'required',
            //'snombre'=> 'required',
            'papellido'=> 'required',
            //'sapellido'=> 'required',
            'telefono'=> 'required',
            'correo' => 'required|email',
            'fecha'=> 'required',
        ];

    }

    public function messages()
    {
        return [
            'documento.required'=> 'Debe ingresar el documento de identidad',
            'pnombre.required'=> 'Debe ingresar el primer nombre',
            //'snombre.required'=> 'required',
            'papellido.required'=> 'Debe ingresar el primer apellido',
            //'sapellido.required'=> 'required',
            'telefono.required'=> 'Debe ingresar el telefono',
            'correo.email' => 'El correo debe tener un formato correcto',
            'fecha.required'=> 'Debe ingresar fecha',
           'correo.email' => 'El correo debe tener un formato correcto',
        ];
    }

}
