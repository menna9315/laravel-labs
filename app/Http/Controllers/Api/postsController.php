<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Resources\postResource; //layer elli bst5dmo
use App\Http\Requests\StorePostRequest;

class postsController extends Controller
{
    public function index(){
        $posts=Post::with('user')->paginate(1);
        return postResource::collection($posts); //colection bta5od 7aga no3ha array htro7 postres htnfz el fun to array
    }
    public function store(StorePostRequest $request){
              $post= Post::create($request->all());
              return new postResource($post);
    }
}

