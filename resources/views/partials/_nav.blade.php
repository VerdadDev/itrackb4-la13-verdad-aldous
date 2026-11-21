<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">Comics Record</a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('comics.*') ? 'active' : '' }}"
                       href="{{ route('comics.index') }}">Comics</a>
                </li>
            </ul>
        </div>
        @guest
    <a href="{{ route('login') }}">Log in</a>
    <a href="{{ route('register') }}">Register</a>
@endguest
@auth
    <span class="text-primary">{{Auth::user()->name }}</span>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button>Log out</button>
    </form>
@endauth

    </div>
</nav>
