<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function access(Request $request) {
        $login = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($login))
            return response()->json(['message' => 'Tu correo y/o contraseña son incorrectos'], 200);

        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        Auth::user()->getRoleNames();

        return response()->json([
            'user' => Auth::user(),
            'access_token' => $accessToken,
        ], 200);
    }
}
