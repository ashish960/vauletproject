<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Userdata;
use App\Http\Requests\requests;
use App\Http\Requests\loginrequest;
use App\Http\Requests\addmoney;
use Illuminate\Support\Facades\Hash;


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
            'password'=>Hash::make($request->input('password')),
            
        ]);
        return view('index_view');
    }

    //login
    public function login(){
       
        return view('user_login_view');
    }


//login
    public function userlogin(loginrequest $request){
        $name=$request['name'];
        $user = Userdata::where('name' ,$name)->first();
        //print_r($user);

         if ($user && Hash::check($request['password'], $user['password'])) {

            session()->put('id',$user['id']);
            session()->put('name',$user['name']);
            session()->put('balance',$user['balance']);
            

            return view('index_view');
        } 
        else{
             echo "Invalid username and password";
        }
        
    }

    //session end
    public function sessionend(){
        session()->flush();
        return view('index_view');
    }


    //addmoney
       public function addmoney(){
        return view('add_money');
       }

     //addmoeyinacc
    public function addmoneyinacc(addmoney $request){ 
        if(session()->has('balance')){
            $id = session()->get('id');
            $balance = session()->get('balance');
            $addno=$request['addmoney'];
            $addition= $balance + $addno;
            echo $addition;

            //adding data to database
            $user= Userdata::where('id' ,$id);
            $user->update(['balance' => $addition]);
            session(['balance' => $addition]);
            


        //     echo"<pre>";
        //     print_r($data);
        //   echo"<pre>";
        }
        else{
        }
    }


    //checkbalance
    public function checkbalance(){
        if(session()->has('balance')){
            $balance = session()->get('balance');
            echo "Your Balance is :" . $balance;
            
        }
       
    }


}









