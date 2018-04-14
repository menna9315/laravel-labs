@extends('layouts.master')


@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="/posts/{{$post->id}}/update">
    {{csrf_field()}}
    
    {{method_field('PUT')}}
    <input type="hidden" name="id" value={{$post->id}} >

Title :- <input type="text" name="title" value="{{$post->title}}">
<br><br>
Description :- 
<textarea name="desc">{{$post->desc}}</textarea>
<br>
<br>    
Post Creator
<select class="form-control" name="user_id">
<!-- <option value="{{$post->user->id}}">{{$post->user->name}}</option> -->
@foreach ($users as $user)


    <option value="{{$user->id}}" 
    {{$post->user->id == $user->id  ? 'selected' : ''}} >  {{$user->name}}</option>
@endforeach

</select>
<br>
<input type="submit" value="Submit" class="btn btn-primary">
</form>

@endsection