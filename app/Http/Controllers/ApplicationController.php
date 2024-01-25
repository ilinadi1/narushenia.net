<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function create(Request $request){
        $createApplication = $request->all();
        Application::create([
            'car_number'=>$createApplication['car_number'],
            'description'=>$createApplication['description'],
            'user_id'=>Auth::user()->id,
            'status_id'=>1,
        ]);
        return redirect("/applications")->with("succes", "Заявка создана");

    }

    public function AppList(){
        $data = Application::where('user_id', Auth::user()->id)->with('get_status')->paginate(10);
        return view("application", ["apps"=> $data]);
    }
}
