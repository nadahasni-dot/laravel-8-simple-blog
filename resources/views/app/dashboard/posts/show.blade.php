@extends('app.dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Posts</h1>
    </div>

    <div class="row mt-5">
        <div class="col-md-8">
            <article class="mb-5">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-primary"><span data-feather="arrow-left"></span> Back</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-success"><span data-feather="edit"></span>
                    Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                            data-feather="delete"></span> Delete</button>
                </form>

                <img src="https://source.unsplash.com/800x400?{{ $post->category->name }}" class="my-4 img-fluid"
                    alt="{{ $post->category->name }}">
                {!! $post->body !!}
            </article>
        </div>
    </div>
@endsection
