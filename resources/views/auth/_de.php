@extends('layouts.auth')
@section('title')
    {{ config('app.name', 'Laravel') }} | {{ __('Verify Email') }}
@endsection
@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">
                {{ __('Verify Your Email Address') }}
            </p>

            @include('backend.includes.alerts')
            <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
            <p>{{ __('If you did not receive the email') }},</p>
            <form method="POST" action="{{ route('verification.resend') }}">
                @csrf

                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('click here to request another') }}
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
@endsection
