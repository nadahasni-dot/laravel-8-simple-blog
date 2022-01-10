@extends('layouts.main')

@section('content')
    <h3>Post Category : {{ $title }}</h3>
    <p><a href="/categories">Display all categories</a></p>

    <div class="mt-5">
        @foreach ($posts as $post)
            <article class="mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text"
                                href="/post/{{ $post->slug }}">{{ $post->title }}</a></h5>
                        <h6 class="card-subtitle mb-2 text-muted">By: {{ $post->author }}</h6>
                        <p class="card-text text-truncate">{{ $post->excerpt }}</p>
                        <a href="/post/{{ $post->slug }}" class="card-link btn btn-primary">Read More</a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
@endsection
