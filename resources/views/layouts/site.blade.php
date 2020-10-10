<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Richard & Kimberley - 27 mei 2021</title>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">

    <script src="{{ asset('js/theme.js') }}"></script>

    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body>

<div class="container bg-white">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="site-title">Richard <small><span style="color:#8077B0;">+</span></small> Kimberley</h1>
            <p class="weddingdate">27 mei 2021</p>
        </div>

    </div>
    @include('layouts.nav')

    @yield('content')

</div>
@if(session('token'))
    <a href="/destroySession">destroy</a>
@endif
@stack('js')
</body>
</html>
