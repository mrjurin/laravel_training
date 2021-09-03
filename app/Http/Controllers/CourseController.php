<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
   public function create()
   {
       return view('course.create');
   }

   public function store(Request $request)
   {
       $course = new Course();
       $course->course_code = $request->course_code;
       $course->course_name = $request->course_name;
       $course->cluster= $request->cluster;
       $course->save();
       return redirect('/course/list');
   }

   public function list()
   {
       $courses = Course::all();

       return view('course.list',[
           'courses'=>$courses
        ]);
   }

   public function edit($id)
   {
       $course = Course::find($id);
       return view('course.edit',[
           'course'=>$course
       ]);
   }

   public function update(Request $request)
   {
       $course = Course::find($request->id);
       $course->course_name = $request->course_name;
       $course->cluster = $request->cluster;
       $course->save();

       return redirect('/course/list');
   }

   public function delete(Request $request,$id)
   {
        Course::find($id)->delete();
        return redirect('/course/list');
   }
}
