<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function signUp(Request $request){
        $signUp = $request->all();
        User::create([
            "login"=>$signUp['login'],
            "password"=>Hash::make($signUp['password']),
            "name"=>$signUp['name'],
            "surname"=>$signUp['surname'],
            "patronymic"=>$signUp['patronymic'],
            "phone"=>$signUp['phone'],
            "email"=>$signUp['email'],
            "role"=>2,

        ]);
        return redirect("/")->with("succes", "Успешная регистрация");
    }

    public function signIn(Request $request){
        $signIn = $request->all();
        if(Auth::attempt(['login' => $signIn['login'], 'password' => $signIn['password']])){
            return redirect("/applications")->with("succes", "Успешная авторизация");
        }else{
            return redirect("/")->with("error", "Повторите попытку");
        }

    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect("/");
    }
}
