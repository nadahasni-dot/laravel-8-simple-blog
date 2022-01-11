@extends('layouts.main')

@section('content')
    <div class="row mt-5">
        <div class="col-md-8">
            <article class="mb-5">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <h6 class="mb-3">By: <a href="/author/{{ $post->user->username }}"
                        class="text-decoration-none">{{ $post->user->name }}</a> in <a class="text-decoration-none"
                        href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </h6>
                <img src="https://source.unsplash.com/800x400?{{ $post->category->name }}" class="mb-3 img-fluid"
                    alt="{{ $post->category->name }}">
                {!! $post->body !!}
                <p class="mt-3"><a href="/blog" class="card-link btn btn-primary">Back</a></p>
            </article>
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

@endsection
