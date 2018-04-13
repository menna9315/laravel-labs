@extends('layouts.master')


@section('content')

<form method="post" action="/posts/{{$post->id}}/update">
{{csrf_field()}}

Title :- <input type="text" name="title" value="{{$post->title}}">
<br><br>
Description :- 
<textarea name="desc" value="{{$post->desc}}" ></textarea>
<br>
<br>    
Post Creator
<select class="form-control" name="user_id">
@foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
@endforeach

</select>
<br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>

@endsection