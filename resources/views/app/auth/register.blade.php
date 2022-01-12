@extends('layouts.main')

@section('content')
    <h1 class="text-center mb-5">Register</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="exampleInputusername1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputusername1" aria-describedby="usernameHelp"
                        placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Email" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                        required>
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
