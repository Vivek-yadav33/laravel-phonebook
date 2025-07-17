@extends('layouts.guest')
@section('content')
    <div class="login-main">
        <form action="{{ route('register.store') }}" method="post" class="theme-form">
            @csrf
            <h4>Create your account</h4>
            <p>Enter your personal details to create account</p>
            <div class="form-group">
                <div class="row g-2">
                    <div class="col-6">
                        <label class="col-form-label pt-0">Your Name</label>
                        <input class="form-control" type="text" name="first_name"  placeholder="First name">
                        @error('first_name')
                            <label class=" pt-0 text-danger">
                                {{ $message }}
                            </label>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label class="col-form-label pt-0">Your Name</label>

                        <input class="form-control" type="text"  name="last_name" placeholder="Last name">
                        @error('last_name')
                            <label class=" pt-0 text-danger">
                                {{ $message }}
                            </label>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-form-label">Email Address</label>
                <input class="form-control" type="email"  name="email" placeholder="Test@gmail.com">
                @error('email')
                    <label class=" pt-0 text-danger">
                        {{ $message }}
                    </label>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-form-label">Password</label>
                <div class="form-input position-relative">
                    <input class="form-control" type="password" name="password"  placeholder="*********">
                    @error('password')
                        <label class=" pt-0 text-danger">
                            {{ $message }}
                        </label>
                    @enderror
                    <div class="show-hide"><span class="show"></span></div>
                </div>
            </div>
            <div class="form-group mb-0">
                <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy
                            Policy</a></label>
                </div>
                <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
            </div>

            <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="login">Sign in</a></p>
        </form>
    </div>
@endsection
