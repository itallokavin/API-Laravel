<?php

namespace App\Http\Controllers;

use App\Models\Cartao;
use App\Http\Requests\CartaoRequest;
use App\Http\Resources\CartaoResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Crypt;

class CartaoController extends Controller
{

    public function index()
    {
        $cartao = Cartao::all();
        return response()->json($cartao);
    }

    public function store(CartaoRequest $request)
    {
        $data = $request->validated();
        $data['numero_cartao'] = Crypt::encryptString($request->numero_cartao);
        $data['hash_cartao'] = hash('sha256',$request->numero_cartao);

        $cartao = Cartao::create($data);
        
        return new CartaoResource($cartao);
    }

    public function show(string $id)
    {
        try {
            //$cartoes = Cartao::where('cliente_id', $cliente_id)->get();
            $cartao = Cartao::findOrFail($id);
            return CartaoResource::collection($cartao);
        } 
        catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'No cards found',
            ], 404);
        }

    }

    public function showByClientId(string $cliente_id)
    {
        try {
            $cartoes = Cartao::where('cliente_id', $cliente_id)->get();
            return CartaoResource::collection($cartoes);
        } 
        catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'No cards found',
            ], 404);
        }

    }
    
    public function update(CartaoRequest $request, string $id)
    {
        $cartao = Cartao::findOrFail($id);

        $data = $request->validated();
        $data['numero_cartao'] = Crypt::encryptString($request->numero_cartao);
        $data['hash_cartao'] = hash('sha256',$request->numero_cartao);
           
        $cartao->update($data);

        return new CartaoResource($cartao);
    }

    public function destroy(string $id)
    {
        $cartao = Cartao::findOrFail($id);
        $cartao -> delete();

        return response()->json(['message' => 'Cartão deletado']);
    }
}
