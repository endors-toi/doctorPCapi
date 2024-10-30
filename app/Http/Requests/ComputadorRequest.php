<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputadorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'precio' => 'required|integer',
            'marca' => 'required|string|max:10',
            'anio' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'precio.required' => 'El precio es obligatorio.',
            'precio.integer' => 'El precio debe ser un número entero.',
            'marca.required' => 'La marca es obligatoria.',
            'marca.string' => 'La marca debe ser un string.',
            'marca.max' => 'La marca no puede tener más de 10 caracteres.',
            'anio.required' => 'El año es obligatorio.',
            'anio.date' => 'El año debe ser una fecha válida.',
        ];
    }
}
