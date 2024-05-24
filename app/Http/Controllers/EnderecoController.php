<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnderecoRequest;
use App\Http\Resources\EnderecoResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Endereco;

class EnderecoController extends Controller
{

    public function index()
    {
        $endereco = Endereco::all();
        return response()->json($endereco);
    }

    public function store(EnderecoRequest $request)
    {
        $data = $request->validated();
        $endereco = Endereco::create($data);

        return new EnderecoResource($endereco);
    }

    public function show(string $id)
    {
        try{
            $endereco = Endereco::findOrFail($id);
            return new EnderecoResource($endereco);
        }catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Endereco not found',
            ], 404);
        }
        
    }

    public function update(EnderecoRequest $request, string $id)
    {
        $endereco = Endereco::findOrFail($id);

        $data = $request->validated();
        $endereco->update($data);

        return new EnderecoResource($endereco);
    }

    public function destroy(string $id)
    {
        $endereco = Endereco::findOrFail($id);
        $endereco->delete();

        return response()->json(['message' => 'Endereço excluído']);
    }
}
