<x-layout title="Tutti gli annunci">

    <section class="py-5">

        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>

                    <p class="section-label mb-1">
                        Marketplace
                    </p>

                    <h1>
                        Tutti gli annunci
                    </h1>

                </div>

                @auth

                    <a
                        href="{{ route('article.create') }}"
                        class="btn btn-presto"
                    >
                        Inserisci annuncio
                    </a>

                @endauth

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
                                Non sono presenti annunci.
                            </h3>

                        </div>

                    </div>

                @endforelse

            </div>

            @if ($articles->hasPages())

                <div class="mt-5">

                    {{ $articles->links() }}

                </div>

            @endif

        </div>

    </section>

</x-layout>