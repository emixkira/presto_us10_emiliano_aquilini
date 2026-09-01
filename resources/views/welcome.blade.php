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

    <section class="py-5">

        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>

                    <p class="section-label mb-1">
                        Ultimi annunci
                    </p>

                    <h2>
                        Le novità su Presto
                    </h2>

                </div>

                <a
                    href="{{ route('article.index') }}"
                    class="btn btn-outline-secondary"
                >
                    Tutti gli annunci
                </a>

            </div>

            <div class="row g-4">

                @forelse ($articles as $article)

                    <div class="col-12 col-md-6 col-lg-4">

                        <x-card :article="$article" />

                    </div>

                @empty

                    <div class="col-12">

                        <div class="empty-box">

                            <h3>
                                Non sono ancora stati creati annunci.
                            </h3>

                        </div>

                    </div>

                @endforelse

            </div>

        </div>

    </section>

</x-layout>