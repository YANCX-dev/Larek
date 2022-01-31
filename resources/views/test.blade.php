@extends('layouts.app')


@section('title','test')

@section('content')
    <h1>Test page</h1>
    <hr>
    <h2>{{ $author}}</h2>
    <p>{{ $phrase }}</p>
    <hr>
    <ul class="list-group">
        @foreach($tasks as $task)
            <li class="list-group-item">{{ $task }}</li>
        @endforeach
    </ul>
@endsection


