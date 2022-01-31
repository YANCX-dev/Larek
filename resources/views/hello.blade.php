@extends('layouts.app')


@section('title','hello')

@section('content')
    <h1>Hello {{ $name }}</h1>
    <hr>
    @if(isset($users) && count($users)>0)
        <ul class="list-group">
            @foreach($users as $user)
                <li class="list-group-item">{{$user->name}}</li>
            @endforeach
        </ul>
    @else
        <p>Список пользователей пуст...</p>

    @endif





    {{--    <ul class="list-group">--}}
    {{--        @foreach($tasks as $task)--}}
    {{--            <li class="list-group-item">{{ $task }}</li>--}}
    {{--        @endforeach--}}
    {{--    </ul>--}}
@endsection


