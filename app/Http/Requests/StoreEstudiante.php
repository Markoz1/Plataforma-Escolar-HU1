<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEstudiante extends FormRequest
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
            'apellido_paterno' => 'required|min:2|max:32',
            'apellido_materno' => 'required|min:2|max:32',
            'nombre' => 'required|min:2|max:32',
            'pais' => 'required|min:2|max:32',
            'departamento' => 'required|min:2|max:32',
            'ci' => 'required|min:2|max:32',
            'fecha_nacimiento' => 'required',
            'sexo' => 'required|in:M,F',
            'direccion' => '',
            'telefono' => '',
        ];
    }
}
