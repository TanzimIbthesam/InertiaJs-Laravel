<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Post $post,User $user)
    {
        // $this->authorize('editPost');
        // return Post::with('user')->get();
        // return new PostCollection(Post::query()->paginate(3));
        // return Post::with('user')->get();
        // return new PostCollection(Post::query()->paginate(4));
        // $this->authorize('editPost');
        // return new PostCollection(Post::query()->paginate(10));
        return Inertia::render('Posts/index',[
             'posts'=>new PostCollection(Post::query()->paginate(10)),
            
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Inertia::render('Posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //
        $post=new Post();
        $post->title=$request->input('title');
        $post->description=$request->input('description');
        $post->user_id=$request->user()->id;
       
        if($request->hasFile('image')){
            //Image upload
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
             
            $request->file('image')->storeAs('public/product_images',$fileNameToStore);
              
            
          
                 
                    $post->image = $fileNameToStore;
                 
              
             
            $post->save();
         
         
    }else{
        
      
             
                $post->image = null;
             
          
         
        $post->save();
    }
   
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Inertia::render('Posts/PostDetail',[
          'post'=>new PostResource(Post::findOrFail($id))
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->authorize('view');
        //
        // return new PostResource(Post::findOrFail($id));
       return Inertia::render('Posts/EditPost',[
            'post'=>new PostResource(Post::findOrFail($id))
        ]);
    }
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        //
        $post=Post::find($id);
        $post->title=$request->input('title');
        $post->description=$request->input('description');
        if($request->hasFile('image')){
            //Image upload
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
             
            $request->file('image')->storeAs('public/product_images',$fileNameToStore);
              
            
          
                 
                    $post->image = $fileNameToStore;
                 
              
             
            
         
         
    }
    $post->update();  
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
        $post=Post::find($id);
        if($post->image != null){
            // Delete Image
            Storage::delete('public/product_images/'.$post->image);
        }
        
        $post->delete();
        return redirect()->route('posts.index');
    }
}
