<x-layout :title="'Categoria ' . $category->name">

    <section class="py-5">

        <div class="container">

            <p class="section-label">
                Categoria
            </p>

            <h1 class="mb-4">
                Annunci in {{ $category->name }}
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
                                Non ci sono annunci in questa categoria.
                            </h3>

                        </div>

                    </div>

                @endforelse

            </div>

            <div class="mt-5">

                {{ $articles->links() }}

            </div>

        </div>

    </section>

</x-layout>