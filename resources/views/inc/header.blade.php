<header>
    <div class="header-logo"><img src="{{ asset('img/STG-media-logo-concept.png') }}"></div>
        <div class="header-links">
            <a href="/">Home</a>
            <a href="{{ route('gallery.index') }}">Galerij</a>
            @if(! \Illuminate\Support\Facades\Auth::check())
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Registreren</a>
            @endif
            @if(\Illuminate\Support\Facades\Auth::check())
                <a href="{{ route('logout') }}">Log uit</a>
            @endif
        </div>
    </header>

