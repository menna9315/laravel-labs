<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
class Posts extends Controller
{
    //
   // public function index(){
       // dd('stop');     //ay 7aga gaya ba3dha msh bt3mlha
        //return Post::all();
        //dd(Post::create([
          //    'title' =>'created',
            //  'desc' =>'welcome'
        //])); //create bta5od array
        //$post=Post::all()->first();
        //$post=Post::first();
       // dd($post->title);
      //  dd($post);
        //return 'hello';
        //$posts=Post::all();
        //return view('posts.index',[
          //  'posts'=>$posts
        //]);

        public function index()
        {
            $posts = Post::all();
            $post = $posts->first();
    
            return view('posts.index',[
    
                'posts' => $posts
            ]);
        }
            

        public function create()
        {
            $users = User::all();
            return view('posts.create',[
                'users' => $users
            ]);
        }
        public function show(Post $post){

            //compact == ['post' =>$post]
            //dd($post->user);
            return view('posts.show',compact('post'));
        }
    
        public function store(StorePostRequest $request)
        {
            
             
            Post::create([
                'title' => $request->title,
                'desc' => $request->desc,
                'user_id' => $request->user_id
            ]);
            
           return redirect(route('posts.index')); 
        }
       

        public function destroy(Post $post)
    {
       $post->delete();
        //$post = $posts->first();
        return redirect(route('posts.index'));
    }

    public function edit ($id)
    {
     $post=Post::find($id);
     $users=User::all();
     return view('posts.edit',compact('post','users'));
    }


    public function update(UpdatePostRequest $request,$id){
        $post=Post::find($id);
        $post->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'user_id' => $request->user_id
        ]);
        // $post->title=$request->title;
        // $post->desc=$request->desc;
        // $post->user_id=$request->user_id;
        // $post->save();



       return redirect(route('posts.index')); 
    }

    

}
