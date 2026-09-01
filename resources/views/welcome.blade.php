<x-layout title="Presto">

    <header class="hero-section">

        <div class="container">

            <div class="row">

                <div class="col-12 col-lg-9">

                    <p class="section-label">
                        Marketplace
                    </p>

                    <h1 class="hero-title">
                        Compra. Vendi. Presto.
                    </h1>

                    <p class="hero-text">
                        Trova nuovi oggetti oppure pubblica
                        ciò che non utilizzi più.
                    </p>

                    @auth

                        <a
                            href="{{ route('article.create') }}"
                            class="btn btn-presto mt-3"
                        >
                            Inserisci annuncio
                        </a>

                    @else

                        <a
                            href="{{ route('register') }}"
                            class="btn btn-presto mt-3"
                        >
                            Registrati
                        </a>

                    @endauth

                </div>

            </div>

        </div>

    </header>

</x-layout>