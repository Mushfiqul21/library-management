<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Themepixels">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <title>@stack('title' ?? '')</title>
{{--    <img src="{{ getImageUrl($generalSetting?->logo)  }}" height="30" alt="">--}}
{{--    <link rel="stylesheet" href="{{asset('assets/lib/remixicon/fonts/remixicon.css')}}">--}}
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&amp;display=swap">
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('style')
</head>
<body class="page-sign d-block py-0">
@yield('content')
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
@stack('script')
</body>
</html>
