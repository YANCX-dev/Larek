@extends('layouts.app')



@section("content")
<div class="card mb-3">
    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        <div class="col-md 8 d-flex flex-column justify-content-sm-between">
            <div class="card-body">
                <div class="mb-3">
                    <input type="text" class="form-control" id="title"
                    name="title" placeholder="Введите заголовок статьи..." value="{{ old('title') }}">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
