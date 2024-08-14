<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->pw
        ];

        if(Auth::attempt($credentials) == true){
            Cookie::queue(
                'userLogged',
                Auth::user()->email,
                60
            ); 

            return redirect()->route('display_welcome_page'); //Login berhasil
        }
        else{
            $errorMsg = "Email atau kata sandi salah";
            return redirect()->back()->withErrors($errorMsg);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('display_welcome_page');
    }
}
