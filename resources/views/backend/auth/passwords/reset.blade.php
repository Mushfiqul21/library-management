@extends('auth.app')
    @push('title')
        {{ $pageTitle }}
    @endpush
@section('content')
<div class="auth-container">
    <div class="card">
      <div class="card-body">
        <img src="{{ asset('assets/img/logo.svg') }}" alt="{{__('Touran admin logo') }}" width="32" height="32" class="mb-3">
        <h1 class="fw-black mb-4">{{ __('Reset Your Password') }}</h1>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="mb-4">
                <label class="form-label fw-bold">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderroran>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">{{ __('New Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Enter your new password') }}">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label d-flex justify-content-between fw-bold">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
            </div>

              <button type="submit" class="btn btn-primary w-100">{{ __('Reset') }}</button>

        </form>
      </div>
    </div>
  </div>
@endsection
