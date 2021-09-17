<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;
use Session;

class LecturerController extends Controller
{
    public function index()
    {
        $lectures = [];

        if(Session::get('role') == "Admin"){
            $lectures = Lecturer::all();
        }else{
            $lectures = Lecturer::where('user_id',Session::get('user_id'))->get();
        }

        //dd($lectures);
        return view('lecturer.index',[
            'lecturers'=>$lectures
        ]);
    }
}
