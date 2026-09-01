<x-layout title="Risultati ricerca">

    <section class="py-5">

        <div class="container">

            <p class="section-label">
                Ricerca
            </p>

            <h1 class="mb-4">
                Risultati per "{{ $query }}"
            </h1>

            <div class="row g-4">

                @forelse ($articles as $article)

                    <div class="col-12 col-md-6 col-lg-4">

                        <x-card :article="$article" />

                    </div>

                @empty

                    <div class="col-12">

                        <div class="empty-box">

                            <h3>
                                Nessun annuncio trovato.
                            </h3>

                            <p>
                                Prova con una ricerca diversa.
                            </p>

                            <a
                                href="{{ route('article.index') }}"
                                class="btn btn-presto"
                            >
                                Tutti gli annunci
                            </a>

                        </div>

                    </div>

                @endforelse

            </div>

            @if ($articles->hasPages())

                <div class="mt-5">

                    {{ $articles->withQueryString()->links() }}

                </div>

            @endif

        </div>

    </section>

</x-layout>