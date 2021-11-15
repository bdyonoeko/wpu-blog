@extends('layouts.main')

@section('container')
<h1 class="mb-4">Post Category : {{ $category }}</h1>

@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
    <div class="card-body text-center">
        <h2>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
        </h2>
        <p class="card-text">
            <small class="text-muted">
                By.
                <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">
                    {{ $posts[0]->author->name }}
                </a> in
                <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">
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
@else
<p class="text-center fs-4">No post found.</p>
@endif

<div class="">
    <div class="row">

        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <p class="position-absolute px-2 rounded-pill py-1 text-dark"
                    style="background-color: rgba(248, 237, 88, 0.7)">
                    <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-dark">
                        {{ $post->category->name }}
                    </a>
                </p>
                <img src="https://source.unsplash.com/300x300?{{ $post->category->name }}" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h2 class="card-title">
                        <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
                    </h2>
                    <p>
                        By.
                        <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">
                            {{ $post->author->name }}
                        </a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                    <p>{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more..</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection
