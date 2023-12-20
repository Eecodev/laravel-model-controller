

<header class="container my-4">
    <div class="d-flex justify-content-between align-items-center">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link my-color" aria-current="page"
                    href="{{ route('home')}}">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link my-color" href="{{ route('movies.index')}}">
                    Movies
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link my-color" href="{{ route('books.index')}}">Books</a>
            </li>
        </ul>
    </div>
</header>
