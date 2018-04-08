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
            'apellido_paterno' => 'required|min:3|max:100|alpha',
            'apellido_materno' => 'nullable|min:3|max:100|alpha',
            'nombre' => 'required|min:3|max:50|alpha',
            'pais' => 'nullable|min:4|max:25|alpha',
            'departamento' => 'nullable|min:4|max:25|alpha',
            'ci' => 'nullable|min:6|max:15|alpha_num',
            'fecha_nacimiento' => 'required',//falta restringir entre un rango
            'sexo' => 'required|in:M,F',
            'direccion' => 'nullable|min:6|max:255',
            'telefono' => 'nullable|min:7|max:14',
        ];
    }
}
