<nav class="navbar navbar-light bg-light navbar-expand-lg mb-3">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/rsvp') }}">RSVP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/programma') }}">Programma</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/praktische-informatie') }}">Praktische informatie</a>
            </li>
            @if(session('token') !== null)
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/cadeau-tips') }}">Cadeau tips</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
            </li>
        </ul>
    </div>
</nav>
