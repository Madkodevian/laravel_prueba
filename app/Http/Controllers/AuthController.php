<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        //Validacion de los datos
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        //Crear un nuevo usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //Generar token
        $token = $user->createToken('authToken')->plainTextToken;

        return response()->json(['message' => 'Usuario registrado', 'token' => $token], 200);
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json(['message' => 'Login OK', 'token' => $token], 200);
        }else{
            return response()->json(['message' => 'Login error'], 401);
        }
    }
}
