<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Application;

class AdminController extends Controller
{
    public function admin(){
        $data=Application::paginate(2);
        return view('admin',["apps"=> $data]);
    }
    public function confirm($id){
        $data = Application::find($id);
        $data->status_id = 2;
        $data->save();
        return redirect('/admin');
    }

    public function decline($id){
        $data = Application::find($id);
        $data->status_id = 3;
        $data->save();
        return redirect('/admin');
    }

    
}
