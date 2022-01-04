@extends('layouts.main')

@section('content')
    <article class="mb-5">
        <h1>{{ $post['title'] }}</h1>
        <h5>By: {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
        <a href="/blog" class="card-link btn btn-primary">Back</a>
    </article>
@endsection
