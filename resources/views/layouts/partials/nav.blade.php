<nav class="navbar ">

    <div class="navbar" id="navbarNav">
        <a class="nav-link active" href="{{ route('index') }}">{{ __('Index') }}</a>&nbsp;&nbsp;
        @auth
            <a class="nav-link active" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>&nbsp;&nbsp;

            <form action="{{ route('logout') }}" method="POST" class="btn btn-danger btn-sm">
                @csrf

                <button
                    style=" border: none;
                        background-color: transparent;
                        color: #000;
                        text-decoration: underline;"
                    type="submit">Logout</button>
            </form>&nbsp;&nbsp;
        @else
            <a class="nav-link active " href="{{ route('login') }}">{{ __('Login') }}</a>
        @endauth
    </div>
    </div>
</nav>
