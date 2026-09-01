<nav class="navbar navbar-expand-lg navbar-light navbar-presto">

    <div class="container">

        <a
            class="navbar-brand presto-brand"
            href="{{ route('home') }}"
        >
            Presto
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarPresto"
            aria-controls="navbarPresto"
            aria-expanded="false"
            aria-label="Apri menu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div
            class="collapse navbar-collapse"
            id="navbarPresto"
        >

            <ul class="navbar-nav me-auto">

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('home') }}"
                    >
                        Home
                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('article.index') }}"
                    >
                        Annunci
                    </a>

                </li>

                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                    >
                        Categorie
                    </a>

                    <ul class="dropdown-menu">

                        @foreach ($categories as $category)

                            <li>

                                <a
                                    class="dropdown-item"
                                    href="{{ route('article.byCategory', $category) }}"
                                >
                                    {{ $category->name }}
                                </a>

                            </li>

                        @endforeach

                    </ul>

                </li>

            </ul>

            <form
                class="d-flex me-3"
                method="GET"
                action="{{ route('article.search') }}"
            >

                <input
                    class="form-control me-2"
                    type="search"
                    name="query"
                    placeholder="Cerca annunci"
                    value="{{ request('query') }}"
                    required
                >

                <button
                    class="btn btn-outline-success"
                    type="submit"
                >
                    Cerca
                </button>

            </form>

            <ul class="navbar-nav">

                @auth

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="{{ route('article.create') }}"
                        >
                            Inserisci annuncio
                        </a>

                    </li>

                    @if (auth()->user()->is_revisor)

                        <li class="nav-item">

                            <a
                                class="nav-link"
                                href="{{ route('revisor.index') }}"
                            >
                                Zona revisore

                                @if (\App\Models\Article::toBeRevisedCount() > 0)

                                    <span class="badge rounded-pill bg-danger">
                                        {{ \App\Models\Article::toBeRevisedCount() }}
                                    </span>

                                @endif

                            </a>

                        </li>

                    @endif

                    <li class="nav-item">

                        <span class="nav-link">
                            Ciao {{ auth()->user()->name }}
                        </span>

                    </li>

                    <li class="nav-item">

                        <form
                            method="POST"
                            action="{{ route('logout') }}"
                        >

                            @csrf

                            <button
                                type="submit"
                                class="nav-link btn btn-link"
                            >
                                Logout
                            </button>

                        </form>

                    </li>

                @else

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="{{ route('login') }}"
                        >
                            Accedi
                        </a>

                    </li>

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="{{ route('register') }}"
                        >
                            Registrati
                        </a>

                    </li>

                @endauth

            </ul>

        </div>

    </div>

</nav>