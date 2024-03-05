<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    //login
    public function login(){
        return view('user_login_view');
    }


}
