<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        //$request->validate([
        //    'username'=>'required',
        //    'password'=>'required'
        //]);
        //filtering
        $usercount = User::where('email',$request->username)
                          ->where('password',$request->password)
                          ->count();

        if($usercount==1)
        {
           $user =  User::where('email',$request->username)
                        ->where('password',$request->password)
                        ->first();


            
            //untuk keep track user
            //session('email',$user->email);
            //session('name','jurin');

            Session::put('email',$user->email);
            Session::put('name',$user->name);
            Session::put('user_id',$user->id);


            //dd($request->session()->get('name'));

            return redirect("/user/home");
        }

    }

    
}
