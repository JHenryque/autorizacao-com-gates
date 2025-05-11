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
        $user = User::find(2);
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
            echo "não e autorizado";
        }
        // essa condiçao noa poder ser um usuario tem que ser admin
        if(Auth::user()->cannot('user_is_user')) {
            echo '<br> Usuário lagado e user logado';
        } else {
            echo "<br> <hr>Bem-vido";
        }
    }

    public function onlyUsers() : void
    {
        if (Auth::user()->can('user_is_user')) {
            echo 'Ben vindo';
        } else {
            echo "user não e admin";
        }

        if(Gate::denies('user_is_admin')){
            echo '<br> Usuário lagado e user';
        } else {
            echo "<br> <hr>User é uma usuário";
        }
    }
}
