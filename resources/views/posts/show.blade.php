@extends('layouts.app')

@section('title',"posts")

@section('content')
    <div class="card mb-3" style="max-width: 1024px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{$post->image}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                    <p class="card-text"><small class="text-muted">{{$post->stand_date}}</small></p>
                </div>
                <button type="button" class="btn btn-warning" href="{{URL::previous()}}">Изменить</button>
                <button type="button" class="btn btn-success">Удалить</button>
            </div>

        </div>
    </div>
@endsection
