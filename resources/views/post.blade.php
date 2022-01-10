@extends('layouts.main')

@section('content')
    <article class="mb-5">
        <h1>{{ $post->title }}</h1>
        <h5>By: {{ $post->author }} in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h5>
        {!! $post->body !!}
        <a href="/blog" class="card-link btn btn-primary">Back</a>
    </article>
@endsection
