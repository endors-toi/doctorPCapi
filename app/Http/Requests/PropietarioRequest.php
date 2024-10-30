<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropietarioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombreApellido' => 'required|string|max:50',
            'id_computadora' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'nombreApellido.required' => 'El nombre y apellido son obligatorios.',
            'nombreApellido.string' => 'El nombre y apellido deben ser un string.',
            'nombreApellido.max' => 'El nombre y apellido no pueden tener más de 50 caracteres.',
            'id_computadora.required' => 'El ID de la computadora es obligatorio.',
            'id_computadora.integer' => 'El ID de la computadora debe ser un número entero.',
        ];
    }

}
