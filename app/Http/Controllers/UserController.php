<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    //paparan untuk wujudkan pengguna
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email'=>'required',
            'full_name'=>'required',
            'password'=>'required|confirmed'
        ]);

        User::create([
            'email'=>$request->email,
            'name'=>$request->full_name,
            'password'=>$request->password //encrypted password Hash::make($request->password)
        ]);

        return redirect('/user/create');
    }

    public function home()
    {
        return view('user.home');
    }
}
