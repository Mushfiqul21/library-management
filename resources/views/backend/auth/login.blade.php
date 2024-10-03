@extends('backend.auth.app')
{{--@push('title')--}}
{{--    {{ $pageTitle }}--}}
{{--@endpush--}}
@section('content')
    <div class="auth-container">
        <div class="card">
            <div class="card-body">
                <img src="images/1727592108.jpg" alt="Admin" width="32" height="32" class="mb-3">
                <h1 class="fw-black mb-2">{{__('Sign in to your account')}}</h1>
                <p class="fw-light text-secondary mb-4">{{__('Welcome! Please sign in to continue.')}}</p>
                <form class="needs-validation">
                  @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold" for="InputEmail">{{__('Email address')}}</label>
                        <input type="email" id="email" class="form-control" name="email"
                            placeholder="{{ __('Enter your email address') }}" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold" for="InputPassword">{{__('Password')}}</label>
                        <input type="password" id="password" class="form-control" @error('password') is-invalid @enderror
                            placeholder="{{ __('Enter your password') }}" name="password" required
                            autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-outline-primary" type="submit" name="login" id="login">Login</button>
                    </div>
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember">
                            <label class="form-check-label" for="remember">{{__('Remember me')}}</label>
                        </div>
                        <a href=""  class="link-primary small text-decoration-none">{{__('Forgot
                            password?')}}</a>
                    </div>
                    <div class="small mt-4">
                        {{__('Don,t have an account ?')}}
                        <a href="" class="link-primary text-decoration-none">{{__('Register')}}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function () {
            $('#login').on('click', function (e) {
                e.preventDefault();

                // Prepare form data
                let email = $('#email').val();
                let password = $('#password').val();

                // Clear previous error messages
                $('.invalid-feedback').remove();
                $('.form-control').removeClass('is-invalid');

                // Make AJAX request
                $.ajax({
                    url: "/api/login", // API route URL
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}", // Include CSRF token
                        email: email,
                        password: password,
                    },
                    success: function (response) {
                        if (response.status === true) {
                            // Redirect to dashboard if login is successful
                            console.log(response);
                            window.location.href = "{{ route('dashboard') }}"; // Replace 'dashboard' with your dashboard route name
                        } else {
                            // Display error message
                            alert(response.message);
                        }
                    },
                    error: function (response) {
                        let errors = response.responseJSON.errors;

                        // Handle validation errors
                        if (errors) {
                            if (errors.email) {
                                $('#email').addClass('is-invalid');
                                $('#email').after('<div class="invalid-feedback"><strong>' + errors.email[0] + '</strong></div>');
                            }
                            if (errors.password) {
                                $('#password').addClass('is-invalid');
                                $('#password').after('<div class="invalid-feedback"><strong>' + errors.password[0] + '</strong></div>');
                            }
                        } else {
                            // Display generic error message
                            alert('Authentication failed. Please try again.');
                        }
                    }
                });
            });
        });
    </script>
@endpush

