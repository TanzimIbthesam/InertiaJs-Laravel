<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;
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
})->name('home');
  
// Route::get('/users',function(){
//  return Inertia::render('Users',[
//      'time'=>now()->toTimeString()
//  ]);
// })->name('users');
Route::get('/users', function () {
    // return User::paginate(10);
    return Inertia::render('Users', [
        'time' => now()->toTimeString(),
        'users' => User::paginate(10)
        // 'users'=>User::select('email')->first()->get()
        // User::all()

        ]);


})->name('users');
Route::get('/settings',function(){
//  return inertia('Settings');
return Inertia::render('Settings');
})->name('settings');

Route::post('/logout',function(){
    //  dd('Logout');
     //dd foo
     dd(request('foo'));
});