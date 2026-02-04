@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="fw-bold mb-3">Welcome Back</h3>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Email or Phone</label>
                            <input type="text" class="form-control" placeholder="you@email.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="••••••••">
                        </div>
                        <button class="btn btn-primary w-100">Login</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
