<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Posts</a>
        <img class="logo" src="{{asset('storage/logo.png')}}" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="{{'posts.index'}}" class="nav-link"></a>
                <a class="nav-link" href="/public/hello">Hello</a>
                <a class="nav-link" href="/public/test">Test</a>
                <a class="nav-link" href="/public/posts">Posts</a>
            </div>
            <form class="d-flex" action="{{route('posts.index')}}">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" value="{{request('search')}}">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>
