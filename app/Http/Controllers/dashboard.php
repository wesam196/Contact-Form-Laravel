<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
class dashboard extends Controller
{
    public function index(){
        $data = contact::paginate(30);
        return view('dashboard' , ['data'=>$data]);
    }


    public function addMessage(Request $request){
        $data = new contact();
        $data->name = $request->input('name');
        $data->contactWay =$request->input('ContactWay');
        $data->message = $request->input('Message');
        $data->type=$request->input('type');     
        $data->save();

        return redirect()->back();

    }

    public function changeStatus($id){
        $data = contact::FindOrFail($id);
        if($data->read==0){
        $data->read = 1;
        }
        else{
            $data->read=0;
        }
        $data->save();
        return redirect()->back();
    }

    public function message($id){
        $data = contact::FindOrFail($id);
        $data->read=1;
        $data->save();
        return view('message' , ['data' =>$data]);
    }

    public function register(){
        
        return view('auth.register');
   
    }


}
