<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DepartamentoController extends Controller
{
	// Ver todos los registros
    // GET
    public function index()
    {
        return Departamento::all();
    }

    // Ver solo un registro por id
    // GET/id
    public function show($id)
    {
        return Departamento::find($id);
    }

    // Nuevo registro
    // POST + json
    public function store(Request $request)
    {
        return Departamento::create($request->all());
    }

    // Editar un registro por id
    // PUT/id + json
    public function update(Request $request, $id)
    {
		$departamento = Departamento::findOrFail($id);
		$departamento->update($request->all());
        return $departamento;
    }

    // Borra un registro por id
    // DESTROY/id
    public function destroy($id)
    {
        Departamento::find($id)->delete();
        return response(null, Response::HTTP_OK);
    }
}