<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use App\Http\Requests\PropietarioRequest;

class PropietarioController extends Controller
{
    public function index()
    {
        return Propietario::all();
    }

    public function store(PropietarioRequest $request)
    {
        $propietario = new Propietario();
        $propietario->nombreApellido = $request->input('nombreApellido');
        $propietario->id_computadora = $request->input('id_computadora');
        $propietario->save();

        return response()->json($propietario, 201);
    }

    public function show(Propietario $propietario)
    {
        return response()->json($propietario);
    }

    public function update(PropietarioRequest $request, Propietario $propietario)
    {
        $propietario->nombreApellido = $request->input('nombreApellido');
        $propietario->id_computadora = $request->input('id_computadora');
        $propietario->save();

        return response()->json($propietario);
    }

    public function destroy(Propietario $propietario)
    {
        $propietario->delete();
        return response()->json(null, 204);
    }
}
