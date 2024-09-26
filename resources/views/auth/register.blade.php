@extends('layouts.auth')
@section('title')
    {{ config('app.name', 'Laravel') }} | {{ __('Register') }}
@endsection

@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">{{ __('Register a new membership') }}</p>
            @include('backend.includes.alerts')
            <form method="POST" action="{{ route('WebRegister') }}">
                @csrf
                <div class="input-group mb-3">
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        placeholder="{{ __('Name') }}"
                        value="{{ old('name') }}"
                        required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="material-icons">person</span>
                        </div>
                    </div>
                    @error('message')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
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
                        <button style="color:white; background-color:#f34e3a;border-color:#f34e3a" type="submit" class="btn btn-primary btn-block"> {{ __('Register') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="row mt-4">
                <div class="col-6  text-left">
                    <div class="col-12">
                        <a href="{{ url('web/login') }}">  <button type="submit" class="btn btn-secondary btn-block"> {{ __('Login') }}</button></a>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
@endsection
