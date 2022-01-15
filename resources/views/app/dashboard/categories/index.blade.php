@extends('app.dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Create New
            Category</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($categories->count())
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>                                
                                <a href="/dashboard/categories/{{ $category->slug }}/edit"
                                    class="badge bg-success btn-sm"><span data-feather="edit"></span></a>
                                <form action="/dashboard/categories/{{ $category->slug }}" method="post"
                                    class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger btn-sm border-0"
                                        onclick="return confirm('Are you sure?')"><span
                                            data-feather="delete"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">
                            <sm class="d-block text-center">No categories Found</sm>
                        </td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>
@endsection
