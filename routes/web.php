<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\User;
 use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
// Route::get('/users', function (Request $request) {
//     // return User::paginate(10);
//     return Inertia::render('Users', [
//         'time' => now()->toTimeString(),
//         'users' => User::query()
//         ->when($request->input('search'), function ($query, $search) {
//             $query->where('name', 'like', "%{$search}%");
//         })
//         ->withQueryString()
//         ->paginate(10)
        
       
//         ->through(fn($user)=>[
//             'id'=>$user->id,
//              'name'=>$user->name
//         ]),
//         // 'users'=>User::select('email')->first()->get()
//         // User::all()
//         'filters' => $request->input('search')
//         ]);


// })->name('users');
Route::get('/users', function (Request $request) {
     $search = $request->query('search');
    return Inertia::render('Users', [
        'users' => User::query()->when($search, fn ($query) =>
        $query->where('name', 'LIKE', "%{$search}%")
    )->orderByDesc('created_at')
    ->paginate(10)
    ->through(fn($user) => [
        'id' => $user->id,
        'name' => $user->name
])
    ->withQueryString(),
    // $search = $request->query('search');
        
            'filters' => $request->only(['search'])
            
            // ->through(fn($user) => [
            //     'id' => $user->id,
            //     'name' => $user->name
            // ]),

        //   'filters' => $request->only(['search'])
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