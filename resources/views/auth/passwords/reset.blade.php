@extends('layouts.auth')
@section('title')
    {{ config('app.name', 'Laravel') }} | {{ __('Reset Password') }}
@endsection
@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">{{ __('Reset Password') }}</p>
            @include('backend.includes.alerts')
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="input-group mb-3">
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="{{ __('Email') }}"
                        value="{{ $email ?? old('email') }}"
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
                <div class="input-group mb-3">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="{{ __('Password') }}"
                        value="{{ old('Password') }}"
                        required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="material-icons">lock</span>
                        </div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input
                        type="password"
                        id="password-confirm"
                        name="password_confirmation"
                        class="form-control"
                        placeholder="{{ __('Confirm Password') }}"
                        value="{{ old('Password') }}"
                        required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="material-icons">lock</span>
                        </div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="row mt-4">
                <div class="col-6 text-left">
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                    @endif
                </div>
                <div class="col-6 text-right">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('I forgot my password') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
@endsection
