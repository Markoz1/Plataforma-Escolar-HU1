<?php

namespace App\Http\Requests;

use Carbon\Carbon;
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
        $fecha_maxima = Carbon::createFromDate(null, 6, 30, 'Etc/GMT-4')->subYear(6)->format('d-m-Y');//para una edad de 6 años
        return [
            'apellido_paterno' => 'required|min:3|max:100|alpha',
            'apellido_materno' => 'nullable|min:3|max:100|alpha',
            'nombre' => 'required|min:3|max:50|alpha',
            'pais' => 'nullable|min:4|max:25|alpha',
            'departamento' => 'nullable|min:4|max:25|alpha',
            'ci' => 'nullable|min:6|max:15|alpha_num|unique:estudiante,ci',
            'fecha_nacimiento' => 'required|before_or_equal:'.$fecha_maxima.'',
            'sexo' => 'required|in:M,F',
            'direccion' => 'nullable|min:6|max:255',
            'telefono' => 'nullable|min:7|max:14',
        ];
    }
    private function diferencia()
    {
        $fecha_nacimiento = Carbon::createFromFormat('Y-m-d', request()->input('fecha_nacimiento'), 'Etc/GMT-4');
        $fecha = Carbon::createFromDate(null, 6, 30, 'Etc/GMT-4')->subYear(6);
        $dife = $fecha_nacimiento->diffInYears($fecha);
        dd($fecha);
        return $fecha;
    }
}
