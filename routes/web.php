<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserControllers;
use App\Http\Controllers\PostControllers;
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

Route::any('user/{id}',[UserControllers::class, 'show']);

//localhost:8000/post1
Route::any('post1',[PostControllers::class, 'MyPostVoid']);

//localhost:8000/post2
Route::get('/post2', [UserControllers::class,'MyUserVoid']);

Route::get('/main', function () {
    return 'hello it is main page<hr><a href=/ >back</a>';
});

Route::get('/', function () {
    return view('welcome');
});

//localhost:8000/index/id/post
Route::get('/indexy/{id}/{post}',['as'=>'myfunc',function($post,$id){
    return view('indrex');
}])->where(['post'=>'[A-Za-z]+','id'=>'[0-9]+']);


Route::get('/poster/{id}', 'PostControllers@showProfile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/sdebug', function () {
    return phpinfo();
});


Route::get('/s0', function () {
    return view('saber');// in /resources / view  / saber . blade . php
});

Route::get('/s1', function () {
    return view('layouts.app');// in  /resources / views / app . blade . php
});



