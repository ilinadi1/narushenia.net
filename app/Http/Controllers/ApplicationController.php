<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function create(Request $request){
        $createApplication = $request->all();
        $request->validate([
            "car_number" => "required",
            "description" => "required"
        ], [
            "car_number.required" => "Поле обязательно для заполнения",
            "description.required" => "Поле обязательно для заполнения",
        ]);
        Application::create([
            'car_number'=>$createApplication['car_number'],
            'description'=>$createApplication['description'],
            'user_id'=>Auth::user()->id,
            'status_id'=>1,
        ]);
        return redirect("/applications")->with("succes", "Заявка создана");

    }
    public function AppList(){
        $data = Application::where('user_id', Auth::user()->id)->with('get_status')->paginate(5);
        return view("application", ["apps"=> $data]);
    }

    public function appSort(Request $request){
        if($request['sort_by'] == 1){
            $data = Application::where('user_id', Auth::user()->id)->with('status')->orderBy('created_at', 'DESC')->paginate(3);
        }
        if($request['sort_by'] == 2){
            $data = Application::where('user_id', Auth::user()->id)->with('status')->orderBy('created_at', 'ASC')->paginate(3);
        }
        if($request['sort_by'] == 3){
            $data = Application::where('user_id', Auth::user()->id)->with('status')->orderBy('status_id', 'ASC')->paginate(3);
        }
        return view("/application", ["apps"=> $data]);
    }
}
