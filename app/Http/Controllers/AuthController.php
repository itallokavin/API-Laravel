<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credenciais = $request->only('usuario', 'senha');

        $usuario = Usuario::where('usuario', $credenciais['usuario'])->first();

        if (!$usuario || !Hash::check($credenciais['senha'], $usuario->senha)) {
            return response()->json(['message' => 'usuário ou senha inválidos'], 401);
        }

        $token = $usuario->createToken('auth_token')->plainTextToken;

        $cookie = cookie('access_token', $token, 60*24*7, null, null, true, true, false, 'strict');

        return response()->json(['message' => 'success', 'access_token' => $token])
                         ->withCookie($cookie);
    }
}
