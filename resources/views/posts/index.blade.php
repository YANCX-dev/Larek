@extends('layouts.app')

@section('title',"posts")

@section("content")
    <div class="d-flex justify-content-between align-items-start">
        {{$posts->onEachSide(1)->links()}}
        <div>
            <a href="{{route('posts.create')}}" class="btn btn-primary">Добавить статью</a>
        </div>
    </div>

    <div class="mb-4">
        <p>Найдено {{$totalCountPosts}}</p>
    </div>
    @if(count($posts)>0)
        <div class="row row-cols-1 row-cols-md-4 mt-4 g-4">
            @foreach($posts as $post)
                @include('inc.post')
            @endforeach
        </div>
    @else
        <h3>Список постов пока пуст...</h3>
    @endif
@endsection
