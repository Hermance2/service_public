<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_form(){
        return view('ConnexionAdmin');
    }

    public function register_form(){
        return view('register_form');
    }
    

    public function register (Request $request){
        return view('DashBoard');

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
