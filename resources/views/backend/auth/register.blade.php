@extends('auth.app')
@push('title')
    {{ $pageTitle }}
@endpush
@section('content')
<div class="auth-container">
    <div class="card">
      <div class="card-body">
        <img src="{{ asset('assets/img/logo.svg') }}" alt="{{__('Touran admin logo') }}" width="32" height="32" class="mb-3">
        <h1 class="fw-black mb-2">{{ __('Create new account') }}</h1>
        <p class="fw-light text-secondary mb-4">{{ __('It`s free and only takes a minute.') }}</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label class="form-label fw-bold">{{ __('Full Name') }}</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                       placeholder="{{__("Enter your name")}}" value="{{ old('name') }}" required
                       autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">{{ __('Email address') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       placeholder="{{__("Enter your email address")}}" value="{{ old('email') }}" required
                       autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label d-flex justify-content-between fw-bold">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       placeholder="{{__("Enter your password")}}" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            @if ($recaptchaStatus->status == RECAPTCHA_STATUS_ENABLE)
              <div class="mb-4">
                  {!! NoCaptcha::renderJs() !!}
                  {!! NoCaptcha::display() !!}
                  @if ($errors->has('g-recaptcha-response'))
                      <span class="help-block text-danger">
                          <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                      </span>
                  @endif
              </div>
            @endif

            <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember" required>
                  <label class="form-check-label" for="remember">{{ __('I agree with') }}</label>
                  <a href="javascript:void(0)" class="link-primary"><u>{{ __('terms and conditions') }}</u></a>
                  <div class="invalid-feedback">{{ __('You must agree in order to proceed.') }}</div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary w-100">{{ __('Create') }}</button>
              <div class="divider-text">{{ __('Or register with') }}</div>
              <div class="d-flex justify-content-between">
                @if ($socialLoginStatus->facebook_login_status == FACEBOOK_LOGIN_STATUS_ENABLE)
                  <a href="{{ route('login.facebook') }}" class="btn btn-sm d-flex gap-1 btn-outline-primary">
                    <svg width="17" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                    </svg>
                    {{ __('Facebook') }}
                  </a>
                @endif
                @if ($socialLoginStatus->x_login_status == X_LOGIN_STATUS_ENABLE)
                  <a href="{{ route('login.x') }}" class="btn btn-sm d-flex gap-1 btn-outline-info">
                    <svg width="17" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                    </svg>
                    {{ __('X') }}
                  </a>
                @endif
                @if ($socialLoginStatus->github_login_status == GITHUB_LOGIN_STATUS_ENABLE)
                  <a href="{{ route('login.github') }}" class="btn btn-sm d-flex gap-1 btn-outline-secondary">
                    <svg width="17" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                    </svg>
                    {{ __('Github') }}
                  </a>
                @endif
                @if ($socialLoginStatus->google_login_status == GOOGLE_LOGIN_STATUS_ENABLE)
                  <a href="{{ route('login.google') }}" class="btn btn-sm d-flex gap-1 btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="17" height="17">
                        <path fill="#4285F4" d="M45.09 24.5c0-1.7-.14-3.1-.39-4.5H24v8.4h11.9c-.51 2.7-2.07 4.9-4.37 6.4v5.3h7.07c4.14-3.8 6.49-9.5 6.49-15.5z"/>
                        <path fill="#34A853" d="M24 48c6 0 11-2 14.7-5.4l-7.07-5.3c-2 1.4-4.6 2.3-7.63 2.3-5.87 0-10.84-3.95-12.63-9.3H3.88v5.9C7.57 43.1 15.26 48 24 48z"/>
                        <path fill="#FBBC05" d="M11.37 30.3c-.47-1.4-.73-2.8-.73-4.3s.27-2.9.73-4.3v-5.9H3.88C2.67 18.6 2 21.2 2 24s.67 5.4 1.88 7.8l7.49-5.5z"/>
                        <path fill="#EA4335" d="M24 9.4c3.26 0 6.16 1.1 8.45 3.27l6.32-6.32C34.94 2.2 29.94 0 24 0 15.26 0 7.57 4.9 3.88 12.2l7.49 5.5c1.79-5.36 6.76-9.3 12.63-9.3z"/>
                    </svg>
                    {{ __('Google') }}
                  </a>
                @endif
              </div>

              <div class="small mt-4">
                {{ __('Already have an account ?') }}
                <a href="{{ route('login') }}" class="link-primary text-decoration-none">{{ __('Sign in') }}</a>
              </div>
        </form>
      </div>
    </div>
  </div>
@endsection
