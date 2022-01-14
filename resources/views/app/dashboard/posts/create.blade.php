@extends('app.dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-md-8">
        <form method="POST" action="/dashboard/posts">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}" required autofocus>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug') }}" required>
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select id="category" class="form-select @error('category_id') is-invalid @enderror"
                    aria-label="Default select example" name="category_id" required>
                    <option value="" selected>Select category</option>
                    @foreach ($categories as $category)
                        <option @if (old('category_id') == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                    <p class="text-danger"><small>{{ $message }}</small></p>
                @enderror
                <input id="body" value="{{ old('body') }}" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary mb-5">Create Post</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
