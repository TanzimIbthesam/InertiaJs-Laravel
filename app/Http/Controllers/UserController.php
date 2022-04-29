<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() 
    {
         $this->middleware("auth")->except(["signupuser"]);
    }
    public function index(Request $request)
    {
        //
        $search = $request->query('search');
    return Inertia::render('Users/index', [
        // 'can' => [
        //     'create_user' => Auth::user()->can('users.create'),
        // ],
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
        
            'filters' => $request->only(['search']),
            'can' => [
                'createUser' => Auth::user()->can('createUser', User::class)
            ]
            
    ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function createadmineuser(Request $request)
    {
        //
    
        return Inertia::render('Users/AdminCreate');
       
       
    }
    public function signupuser(Request $request)
    {
        //
    
        return Inertia::render('Users/UserCreate');
       
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
      User::create($request->validated()); 
      
      return Redirect::route('users.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
