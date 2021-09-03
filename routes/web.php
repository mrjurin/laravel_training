<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mycustom');
});

Route::get('/course',function(){
    return view('course.index');
});

//http: protocol
//verb: GET/POST
Route::get('/user',function(){
    return view('user.index',
        ['name' => 'Jurin Liyun']
    );
});


Route::get('/course/create','App\Http\Controllers\CourseController@create');
Route::post('/course/store','App\Http\Controllers\CourseController@store');

Route::get('/course/list','App\Http\Controllers\CourseController@list');

Route::get('/course/edit/{id}','App\Http\Controllers\CourseController@edit');
Route::post('/course/update','App\Http\Controllers\CourseController@update');

Route::post('/course/delete/{id}','App\Http\Controllers\CourseController@delete');
