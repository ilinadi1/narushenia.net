<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function signIn(){
        // return view('signIn');
        $signIn = $request->all();
        User::create([
            "login"=>$signIn['login'],
            "password"=>Hash::make($signIn['password']),
            "name"=>$signIn['name'],
            "phone"=>$signIn['phone'],
            "email"=>$signIn['email'],
        ]);
        return redirect("/")->with("succes", "Успешная регистрация");
    }
}
