<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Http\Resources\ClienteResource;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function index()
    {
        $cliente = Cliente::all();
        return response()->json($cliente);
    }

    public function store(ClienteRequest $request)
    {
        $data = $request->validated();

        $cliente = Cliente::create($data);
        
        return new ClienteResource($cliente);
    }

    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);

        return new ClienteResource($cliente);
    }
    
    public function update(ClienteRequest $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);

        $data = $request->validated();   
        $cliente->update($data);

        return new ClienteResource($cliente);
    }

    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente -> delete();

        return response()->json(['message' => 'Cliente deletado']);
    }
}
