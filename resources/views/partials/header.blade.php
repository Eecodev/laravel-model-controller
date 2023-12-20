

<header class="container my-4">
    <div class="d-flex justify-content-between align-items-center">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link {{ HomeController::class() == 'index' ? 'active' : ''}}" aria-current="page"
                    href="{{ route('home')}}">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ MovieController::class() == 'movies.index' ? 'active' : ''}}" href="{{ route('movies.index')}}">
                    Movies
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Movies</a>
            </li>
        </ul>
    </div>
</header>
