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


Route::get('/', 'App\Http\Controllers\FoodController@test');
Route::get('/recepie',function(){
    return view('recipie');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/layout',function(){
    return view('layout');
});

Route::get("/food/{foodname}/{quality}",function($foodname,$quality){
    $taste;
    if($quality==1){
        $taste="Good taste";
    }
    else{
        $taste="bad taste";
    }
    return view('foods',compact('foodname','quality','taste'));
});