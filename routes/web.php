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

Route::get('/lecturer','App\Http\Controllers\LecturerController@index');



Route::get('/login','App\Http\Controllers\LoginController@index');
Route::post('/login/authenticate','App\Http\Controllers\LoginController@authenticate');

Route::get('/user/create','App\Http\Controllers\UserController@create');
Route::post('/user/store','App\Http\Controllers\UserController@store');
Route::get('/user/home','App\Http\Controllers\UserController@home');





