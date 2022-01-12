@extends('layouts.main')

@section('content')
    <h1 class="text-center mb-5">Login</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('login_error'))
                <div class="alert alert-success alert-danger fade show" role="alert">
                    {{ session('login_error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Email" name="email" value="{{ old('email') }}" autofocus
                        required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control @error('email') is-invalid @enderror"
                        id="exampleInputPassword1" placeholder="Password" name="password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                <small class="d-block text-center">Don't have account? <a href="/register"
                        class="text-decoration-none">Register</a></small>
            </form>
        </div>
    </div>
@endsection
