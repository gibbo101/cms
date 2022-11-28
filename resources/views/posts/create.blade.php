@extends('layouts.app')



@section('content')
    <h1>Create Post</h1>
    {{-- <form method="post" action="/posts"> --}}
        {!! Form::open(['method'=>'post', 'action'=>'App\Http\Controllers\PostsController@store']) !!}
        @csrf
        <input type="text" name="title" placeholder="Enter Title">
        <input type="submit" name="submit">
        {!! Form::close() !!}
@endsection


