@extends('layouts.guest')
@section('content')
    <div class="login-main">
        <form class="theme-form" action="{{ route('login.store') }}" method="post">
            @csrf
            <h4>Sign in to account</h4>
            <p>Enter your email & password to login</p>
            <div class="form-group">
                <label class="col-form-label">Email Address</label>
                <input class="form-control" type="email" name="email" placeholder="Test@gmail.com">
                @error('email')
                    <label class="pt-0 text-danger">
                        {{ $message }}
                    </label>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-form-label">Password</label>
                <div class="form-input position-relative">
                    <input class="form-control" type="password" name="password" placeholder="*********">
                    @error('password')
                        <label class="pt-0 text-danger">
                            {{ $message }}

                        </label>
                    @enderror

                    <div class="show-hide"><span class="show"> </span></div>
                </div>
            </div>
            <div class="form-group mb-0">
                <div class="checkbox p-0">
                    <input id="checkbox1" name="remember" value="true" type="checkbox">
                    <label class="text-muted" for="checkbox1">Remember password</label>
                </div>
                <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
            </div>

            <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="register">Create Account</a></p>
        </form>
    </div>
@endsection
