@extends('layouts.auth')
@section('title', 'Login ')
@section('content')
    <div class="col d-none d-md-flex d-lg-flex justify-content-center">
        <img src="{{ asset('/images/book_login.svg') }}" alt="" class="w-75">
    </div>
    <div class="col d-flex align-items-center bg-white">
        <div class="p-4 w-100">

            <img src="{{ asset('images/imi.jpg') }}" width="100" alt="">
            <div class="bg-white d-flex flex-column pt-4 pb-0">
                <h1><strong>Selamat Datang</strong></h1>
                <p>Silahkan Login</p>
            </div>
            @include('messages.alert')
            <div class="pt-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autofocus placeholder="Email address"
                            autocomplete="off">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required placeholder="Password" autocomplete="off">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="custom-control custom-checkbox">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            @if (Route::has('password.request'))
                                <a class="float-right underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </div>




                    <div class="mt-3">
                        <button title="Login" class="btn btn-primary btn-block" type="submit">Log
                            In <i class="fas fa-sign-in-alt"></i></button>
                    </div>

                </form>

                <x-auth-footer></x-auth-footer>
            </div>
        </div>
    </div>
@endsection
