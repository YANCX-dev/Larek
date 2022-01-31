<div class="col">
    <div class="card">
        <div class="card-header">{{$post->user->full_name}}</div>
        <img src="{{$post->image}}" class="card-img-top" alt="post-image">
        <div class="card-title">{{$post->title}}</div>
        <div class="card-body">
            <h5 class="card-title">Карточка с растянутой ссылкой</h5>
            <p class="card-text">{{$post->short_content}}</p>
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">
                About
            </a>
        </div>
        <div class="card-footer">{{$post->stand_date}}</div>
    </div>
</div>
