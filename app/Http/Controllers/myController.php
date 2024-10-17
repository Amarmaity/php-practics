<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestUser;

class myController extends Controller
{
    // View Data
    public function index(){
        $data = TestUser::get();    
        return view('create',["data"=>$data]);
    }

    public function viewform(){

        return view('index');
    }
    //Insert Data
    public function store(Request $request){
        $data = [
            'first_name'=>$request->firstName,
            'midle_name'=>$request->middleName,
            'last_name'=>$request->lastName,
            'phone_number'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'pin'=>$request->pin,
        ];
        $result = TestUser::insert($data);
        if($result){
            return redirect('/users');
        }
   }


}

