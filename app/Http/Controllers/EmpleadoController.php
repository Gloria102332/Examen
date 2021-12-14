<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmpleadoController extends Controller
{
	// Ver todos los registros
    // GET
    public function index()
    {
        return Empleados::all();
    }

    // Ver solo un registro por id
    // GET/id
    public function show($id)
    {
        return Empleados::find($id);
    }

    // Nuevo registro
    // POST + json
    public function store(Request $request)
    {
        return Empleados::create($request->all());
    }

    // Editar un registro por id
    // PUT/id + json
    public function update(Request $request, $id)
    {
		$empleados = Empleados::findOrFail($id);
		$empleados->update($request->all());
        return $empleados;
    }

    // Borra un registro por id
    // DESTROY/id
    public function destroy($id)
    {
        Empleados::find($id)->delete();
        return response(null, Response::HTTP_OK);
    }
}