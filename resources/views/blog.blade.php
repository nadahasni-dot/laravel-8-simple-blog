@extends('layouts.main')

@section('content')
    <h1>Blog Page</h1>

    <div class="mt-5">
        <div class="row">
            <div class="col-8">
                @foreach ($posts as $post)
                    <article class="mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3"><a class="text-decoration-none"
                                        href="/post/{{ $post->slug }}">{{ $post->title }}</a></h5>
                                <h6 class="card-subtitle mb-2 text-muted">By: <a href="#"
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
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a class="text-decoration-none"
                                        href="/category/{{ $category->slug }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
