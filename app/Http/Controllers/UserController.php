<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Userdata;
use App\Http\Requests\requests;



class UserController extends Controller
{

    //index
    public function index(){
        return view('index_view');
    }

    //signup
    public function signup(){
        return view('user_registration_view');
    }

    //register
    public function register(requests $request){
        Userdata::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phoneno'=>$request->input('phoneno'),
            'password'=>$request->input('password'),

        ]);
             
    }

    //login
    public function login(){
        return view('user_login_view');
    }


}
