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
        $request->validate(
            [
                "login" =>"required|unique:users",
                "password" => "required|min:6",
                "name" => "required|regex:/[А-Яа-яЁё]+/u",
                "surname" => "required|regex:/[А-Яа-яЁё]+/u",
                "patronymic" => "required|regex:/[А-Яа-яЁё]+/u",
                "phone" => "regex:/^\+7\(\d{3}\)-\d{3}-\d{2}-\d{2}$/",
                "email" => "required|unique:users|email",
            ],
            [
                "login.required" => "Поле обязательно для заполнения",
                "password.required" => "Поле обязательно для заполнения",
                "name.required" => "Поле обязательно для заполнения!",
                "name.regex" => "Только кириллица",
                "surname.required" => "Поле обязательно для заполнения!",
                "surname.regex" => "Только кириллица",
                "patronymic.required" => "Поле обязательно для заполнения!",
                "patronymic.regex" => "Только кириллица",
                "phone.required" => "Поле обязательно для заполнения!",
                "phone.numeric" => "Номер только из цифр!",
                "phone.regex" => "Неправильный формат номера",
                "email.required" => "Поле обязательно для заполнения!",
                "email.email" => "Введите корректный email",
                "email.unique" => "Данный email уже занят",
            ]);
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
        $request->validate([
            "loginOne" => "required",
            "passwordOne" => "required"
        ], [
            "loginOne.required" => "Поле обязательно для заполнения",
            "passwordOne.required" => "Поле обязательно для заполнения",
        ]);

        $signIn = $request->only("loginOne", "passwordOne");
        if (Auth::attempt([
            "login"=>$signIn['loginOne'],
            "password"=>$signIn['passwordOne']
        ])) {
            if (Auth::user()->role == 1) {
                return redirect("/admin");
            } else {
                return redirect("/applications")->with("succes", "");
            }
        }else{
            return redirect()->back()->with("error","Неверная почта или пароль");
        }
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect("/");
    }
}
