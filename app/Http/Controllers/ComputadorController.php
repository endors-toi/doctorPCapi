<?php

namespace App\Http\Controllers;

use App\Models\Computador;
use App\Http\Requests\ComputadorRequest;

class ComputadorController extends Controller
{
    public function index()
    {
        return Computador::all();
    }

    public function store(ComputadorRequest $request)
    {
        $computador = new Computador();
        $computador->precio = $request->input('precio');
        $computador->marca = $request->input('marca');
        $computador->anio = $request->input('anio');
        $computador->save();

        return response()->json($computador, 201);
    }

    public function show(Computador $computador)
    {
        return response()->json($computador);
    }

    public function update(ComputadorRequest $request, Computador $computador)
    {
        $computador->precio = $request->input('precio');
        $computador->marca = $request->input('marca');
        $computador->anio = $request->input('anio');
        $computador->save();

        return response()->json($computador);
    }

    public function destroy(Computador $computador)
    {
        $computador->delete();
        return response()->json(null, 204);
    }
}
