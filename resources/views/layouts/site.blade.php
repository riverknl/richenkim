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
            <h1 class="site-title">Richard <small>en</small> Kimberley</h1>
            <p class="weddingdate">27 mei 2021</p>
        </div>

    </div>
    @if (session('token'))
        @include('layouts.nav')
        @yield('content')
    @else
        <div class="row justify-content-center">
            <div class="col-md-4">

                <form method="POST" action="{{ url('/rsvp/check') }}">
                    @csrf
                    <div class="form-group">
                        <label>Vul hier je RSVP code in.</label>
                        <input class="form-control" name="token" type="text">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Inloggen</button>
                    </div>
                </form>
            </div>
        </div>
    @endif

</div>
<a href="/destroySession">destroy</a>
@stack('js')
</body>
</html>
