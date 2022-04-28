<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth'])->group(function(){
    // Route::resource('users',UserController::class)->only('users');
    Route::resource('users', UserController::class)->except('users.create');
    Route::post('logout',[AuthController::class,'destroy']);
    Route::get('settings',[SettingsController::class,'index'])->name('settings');
   
});
Route::get('createuser',[UserController::class,'create'])->name('usercreate')->middleware(['auth','can:createUser"']);