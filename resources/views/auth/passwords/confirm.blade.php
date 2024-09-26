@extends('layouts.auth')
@section('title')
    {{ config('app.name', 'Laravel') }} | {{ __('Confirm Password') }}
@endsection
@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">
                {{ __('Please confirm your password before continuing.') }}
            </p>
            @include('backend.includes.alerts')
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
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

                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Confirm Password') }}
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <div class="row mt-4">
                <div class="col-6 text-left">
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
