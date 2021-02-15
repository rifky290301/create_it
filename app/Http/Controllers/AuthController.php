<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function init()
    {
        // $user = Auth::user();
        // return ["user" => $user];
        $user = User::get();
        return $user;
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            return ["user" => $user];
        } else {
            return response()->json(["error" => "could not log you in", 403]);
        }
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;

        Auth::login($user);

        return ["user" => $user];
    }
}
