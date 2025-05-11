<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(): RedirectResponse {
        $user = User::find(1);
        Auth::login($user);
        return redirect()->route('home');
    }

    public function logout(): RedirectResponse {
        Auth::logout();
        return redirect()->route('home');
    }
}
