<?php

namespace App\Http\Controllers;

use App\Http\Requests\TelefoneRequest;
use App\Http\Resources\TelefoneResource;
use App\Models\Telefone;

class TelefoneController extends Controller
{
    public function index()
    {   
        $telefone = Telefone::all();
        return response()->json($telefone);
    }
   
    public function store(TelefoneRequest $request)
    {
        $data = $request->validated();
        $data = Telefone::create($data);

        return new TelefoneResource($data);
    }

    public function show(string $id)
    {
        $telefone = Telefone::findOrFail($id);

        return new TelefoneResource($telefone);
    }
    
    public function update(TelefoneRequest $request, string $id)
    {
        $telefone = Telefone::findOrFail($id);
    
        $data = $request->validated();
        $telefone->update($data);
    
        return new TelefoneResource($telefone);
    }

    public function destroy(string $id)
    {
        $telefone = Telefone::findOrFail($id);
        $telefone -> delete();

        return response()->json(['message' => 'Telefone excluído']);
    }
}
