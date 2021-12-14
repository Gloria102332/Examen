<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PuestoController extends Controller
{
	// Ver todos los registros
    // GET
    public function index()
    {
        return Puesto::all();
    }

    // Ver solo un registro por id
    // GET/id
    public function show($id)
    {
        return Puesto::find($id);
    }

    // Nuevo registro
    // POST + json
    public function store(Request $request)
    {
        return Puesto::create($request->all());
    }

    // Editar un registro por id
    // PUT/id + json
    public function update(Request $request, $id)
    {
		$puesto = Puesto::findOrFail($id);
		$puesto->update($request->all());
        return $puesto;
    }

    // Borra un registro por id
    // DESTROY/id
    public function destroy($id)
    {
        Puesto::find($id)->delete();
        return response(null, Response::HTTP_OK);
    }
}