@extends('layouts.main')

@section('content')
    <h1 class="text-center mb-5">Register</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputname1"
                        aria-describedby="nameHelp" placeholder="Name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputusername1" class="form-label">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                        id="exampleInputusername1" aria-describedby="usernameHelp" placeholder="Username" name="username"
                        value="{{ old('username') }}" required>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        id="exampleInputPassword1" placeholder="Password" name="password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <small class="d-block text-center">Already have account? <a href="/login"
                        class="text-decoration-none">Login</a></small>
            </form>
        </div>
    </div>
@endsection
