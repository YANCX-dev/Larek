@extends('layouts.app')


@section('title','Posts')

@section('content')
    <h1>Posts page</h1>
    <hr>
        @foreach($posts as $post)
            {{$post->title}}
        @endforeach
@endsection


