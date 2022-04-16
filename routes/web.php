<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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
    // return Inertia::render('Welcome',[
    //     'name'=>'Tanzim',
    //          'frameworks'=>[
    //              'Laravel','Inertia','Vue'
    //          ]
    // ]);
});
  
Route::get('/users',function(){
 return Inertia::render('Users',[
     'time'=>now()->toTimeString()
 ]);
});
Route::get('/settings',function(){
//  return inertia('Settings');
return Inertia::render('Settings');
});

Route::post('/logout',function(){
    //  dd('Logout');
     //dd foo
     dd(request('foo'));
});