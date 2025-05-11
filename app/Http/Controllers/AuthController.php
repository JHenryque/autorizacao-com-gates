<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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

    public function onlyAdmins()
    {
//        if(Auth::user()->role !== 'admin') {
//        echo "User não é admin";
//        } else {
//            echo 'Ben vindo';
//        }

//        if(Gate::allows('user_is_admin')) {
//            echo 'Ben vindo';
//        } else {
//            echo "User não é admin";
//        }

        if (Auth::user()->can('user_is_admin')) {
            echo 'Ben vindo';
        } else {
            echo "User não é admin";
        }
    }
}
