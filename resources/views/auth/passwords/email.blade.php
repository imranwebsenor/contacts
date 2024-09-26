@extends('layouts.auth')
@section('title')
    {{ config('app.name', 'Laravel') }} | {{ __('Forgot Password') }}
@endsection
@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">
                {{ __('You forgot your password? Here you can easily retrieve a new password.') }}
            </p>
            @include('backend.includes.alerts')
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="input-group mb-3">
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="{{ __('Email') }}"
                        value="{{ old('email') }}"
                        required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="material-icons">mail</span>
                        </div>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="row mt-4">
                <div class="col-6 text-left">
                    @if (Route::has('auth.login'))
                        <a href="{{ route('auth.login') }}">
                            {{ __('Login') }}
                        </a>
                    @endif
                </div>
                <div class="col-6 text-right">
                    @if (Route::has('auth.register'))
                        <a href="{{ route('auth.register') }}">
                            {{ __('register') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
@endsection
