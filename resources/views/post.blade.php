@extends('layouts.main')

@section('content')
    <article class="mb-5">
        <h1 class="mb-3">{{ $post->title }}</h1>
        <h5 class="mb-3">By: <a href="/author/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a
                class="text-decoration-none" href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h5>
        {!! $post->body !!}
        <p class="mt-3"><a href="/blog" class="card-link btn btn-primary">Back</a></p>
    </article>
@endsection
