@extends('layouts.main')

@section('content')
    <h1>All Categories</h1>

    <div class="mt-5">
        <ul>
            @foreach ($categories as $category)
                <li><a class="text" href="/category/{{ $category->slug }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
