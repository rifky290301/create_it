<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function init()
    {
        $user = Auth::user();
        return response()->json($user, 200);
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            return response()->json(Auth::user(), 200);
        } else {
            return response()->json(["error" => "could not log you in", 403]);
        }
    }

    public function register(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (isset($user->id)) {
            return response()->json(['error' => 'Email alredy axists'], 401);
        }

        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;

        Auth::login($user);

        return response()->json($user, 200);
    }

    public function logout()
    {
        Auth::logout();
    }
}
