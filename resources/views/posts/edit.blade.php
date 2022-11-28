@extends('layouts.app')



@section('content')
<h1>Edit Post</h1>
    <form method="post" action="/posts/{{ $post->id }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" placeholder="Enter Title" value="{{ $post->title }}">
        <input type="submit" name="submit" value="Update">
    </form>

    <form method="POST" action="/posts/{{ $post->id }}">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Delete">
    </form>
@endsection


