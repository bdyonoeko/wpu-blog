@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts" method="get">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-info text-light" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
<div class="card mb-3">
    @if ($posts[0]->image)
    <div style="max-height: 350px; overflow: hidden;">
        <img src="{{ asset('storage/'. $posts[0]->image) }}" alt="{{ $posts[0]->title }}">
    </div>
    @else
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
    @endif

    <div class="card-body text-center">
        <h2>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
        </h2>
        <p class="card-text">
            <small class="text-muted">
                By.
                <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">
                    {{ $posts[0]->author->name }}
                </a> in
                <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                    {{ $posts[0]->category->name }}
                </a>
                {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">
            Read more..
        </a>
    </div>
</div>

<div class="">
    <div class="row">

        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <p class="position-absolute px-2 rounded-pill py-1 text-dark"
                    style="background-color: rgba(248, 237, 88, 0.7)">
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-dark">
                        {{ $post->category->name }}
                    </a>
                </p>

                @if ($post->image)
                <div style="max-height: 300px; overflow: hidden;">
                    <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                </div>
                @else
                <img src="https://source.unsplash.com/300x300?{{ $post->category->name }}" class="card-img-top"
                    alt="...">
                @endif

                <div class="card-body">
                    <h2 class="card-title">
                        <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
                    </h2>
                    <p>
                        By.
                        <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                            {{ $post->author->name }}
                        </a>
                        {{ $post->created_at->diffForHumans() }}
                    </p>
                    <p>{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more..</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@else
<p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>

@endsection
