@extends('layouts.main')

@section('content')
    <h3>Post Category : {{ $title }}</h3>

    <div class="mt-5">
        @foreach ($posts as $post)
            <article class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><a class="text-decoration-none"
                                href="/post/{{ $post->slug }}">{{ $post->title }}</a></h5>
                        <h6 class="card-subtitle mb-2 text-muted">By: <a href="/author/{{ $post->user->username }}"
                                class="text-decoration-none">{{ $post->user->name }}</a> in
                            <a class="text-decoration-none"
                                href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                        </h6>
                        <p class="card-text text-truncate">{{ $post->excerpt }}</p>
                        <a href="/post/{{ $post->slug }}" class="card-link btn btn-primary">Read More</a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
@endsection
