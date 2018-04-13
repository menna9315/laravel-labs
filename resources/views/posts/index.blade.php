@extends('layouts.master')


@section('content')

<h1>Posts</h1>
<a href="posts/create">Create Post</a>

<ul>

@foreach ($posts as $post)


<li>{{ $post->title }}   </li>


<form method="post" action="/posts/{{$post->id}}" >
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button onclick="return confirm('are you sure')" type="submit" class="btn btn-danger" > Delete </button>
</form>
<form method="GET" action="/posts/{{$post->id}}/edit" >
    {{csrf_field()}}
    {{method_field('EDIT')}}
    <button  class="btn btn-primary" > edit </button>
</form>




@endforeach


</ul>

@endsection
