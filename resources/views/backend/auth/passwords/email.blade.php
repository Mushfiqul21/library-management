@extends('auth.app')
    @push('title')
        {{ $pageTitle }}
    @endpush
@section('content')
<div class="auth-container">
    <div class="card">
      <div class="card-body">
        <img src="{{ asset('assets/img/logo.svg') }}" alt="{{__('Touran admin logo')}}" width="32" height="32" class="mb-3">
        <h1 class="fw-black mb-2">{{ __('Reset password') }}</h1>
        <p class="fw-light text-secondary mb-4">{{ __('Enter your email address') }}</p>
        <form method="POST" action="{{ route('password.email') }}">
          @csrf
          <div class="mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror"
            placeholder="Enter email address" name="email" value="{{ old('email') }}"
            required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <button type="submit" class="btn btn-danger w-100">{{ __('Reset') }}</button>
          <hr>

        </form>
          <a class="btn btn-light btn-sm d-inline-flex align-items-center gap-2" href="{{ route('login') }}">
            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            {{ __('Back to Login') }}
          </a>
      </div>
    </div>
  </div>
@endsection
