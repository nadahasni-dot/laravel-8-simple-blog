@extends('layouts.main')

@section('content')
    <h1 class="mb-3">{{ $title }}</h1>

    @if ($posts->count())
        <article>
            <div class="card mb-3">
                <div class="position-absolute m-3"><a class="btn btn-primary btn-sm"
                        href="/category/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></div>
                <img src="https://source.unsplash.com/800x200?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $posts[0]->title }}</h5>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>

                    <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </article>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif


    <div class="mt-5">
        <div class="row">
            <div class="col-md-8">
                @foreach ($posts->skip(1) as $post)
                    <article>
                        <div class="card mb-3">
                            <div class="position-absolute m-3"><a class="btn btn-primary btn-sm"
                                    href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            <img src="https://source.unsplash.com/800x200?{{ $post->category->name }}"
                                class="card-img-top" alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">By: <a
                                        href="/author/{{ $post->user->username }}"
                                        class="text-decoration-none">{{ $post->user->name }}</a> in
                                    <a class="text-decoration-none"
                                        href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                                    <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                                </h6>
                                <p class="card-text">{{ $post->excerpt }}</p>

                                <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Categories</h5>
                        <div class="list-group">
                            @foreach ($categories as $category)
                                <a href="/category/{{ $category->slug }}" class="list-group-item list-group-item-action"
                                    aria-current="true">
                                    {{ $category->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
