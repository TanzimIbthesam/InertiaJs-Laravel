<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
Route::get('/', [HomeController::class,'index'])->name('home');
 







Route::get('login', [AuthController::class, 'create'])->name('login');
Route::post('login', [AuthController::class, 'store'])->name('login.store');
Route::resource('users',UserController::class);
Route::middleware(['auth'])->group(function(){
    
    
    Route::post('logout',[AuthController::class,'destroy']);
    Route::get('settings',[SettingsController::class,'index'])->name('settings');
     
    Route::resource('posts',PostController::class);
    Route::get('createuser',[UserController::class,'createadmineuser'])->name('usercreate')->middleware('can:admin.secret'); 
});

Route::get('signup',[UserController::class,'signupuser'])->name('signupuser');
