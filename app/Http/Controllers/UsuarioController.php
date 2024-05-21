<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Http\Resources\UsuarioResource;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }   

    public function store(UsuarioRequest $request)
    {
        $data = $request->validated();
        $data['senha'] = bcrypt($request->senha);
        $usuario = Usuario::create($data);

        return new UsuarioResource($usuario);
    }

    public function show(string $id)
    {
        $usuario = Usuario::findOrFail($id);

        return new UsuarioResource($usuario);
    }

    public function update(UsuarioRequest $request, string $id)
    {
        $usuario = Usuario::findOrFail($id);

        $data = $request->validated();
        $data['senha'] = bcrypt($request->senha);     
        $usuario->update($data);

        return new UsuarioResource($usuario);
    }

    public function destroy(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario -> delete();

        return response()->json(['message' => 'usuário deletado']);
    }
}
