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
//Routing in Inertia
Route::get('/', function () {
    // return view('welcome');
    return inertia('Welcome',[
        'name'=>'Tanzim',
         'frameworks'=>[
             'Laravel','Inertia','Vue'
         ]
    ]);
});
  
Route::get('/users',function(){
 return inertia('Users');
});
Route::get('/settings',function(){
 return inertia('Settings');
});