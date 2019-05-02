<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PassportController extends Controller
{
    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);

        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('FamilyAccountant');

            return response()->json([
                'access_token' => $token->accessToken,
                'token_type' => 'bearer',
                'expires_at' => strtotime($token->token->expires_at),
                'user' => auth()->user()->login
            ], Response::HTTP_OK);
        } else {
            return response()->json(['error' => 'UnAuthorised'], 401);
        }
    }


    public function register(Request $request)
    {
        $validated = $request->validate([
            'login' => 'required|min:5|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);




        $user = User::create($validated);

        if($user){
            return $this->login($request);
        }
    }

}
