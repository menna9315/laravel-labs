@extends('layouts.master')
    @section('content')
        <div>
            Post Info
        </div><br/>
        <div>
           <span>Title: </span> <span>{{$post->title}} </span><br/>
           <span>Description: </span> <span>{{$post->desc}} </span><br/>
        </div>
        <br/>
      
       

    @endsection