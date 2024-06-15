<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register (Request $request){
        $user = new User();
        $user->name = $request ->name;
        $user->email = $request ->email;
        $user->password = $request ->password;
        $user->save();

    }

    public function login(Request $request){
        $credentials = request(['email','password']);
        if(Auth::guard('web')->attempt($credentials)){
           return "tu es connectée";
        }else{
            return "tu n'es pas connectée";
        }
    }
}
