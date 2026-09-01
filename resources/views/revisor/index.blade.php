<x-layout title="Zona revisore">

    <section class="py-5">

        <div class="container">

            <p class="section-label">
                Area revisore
            </p>

            <h1 class="mb-4">
                Annunci da revisionare
            </h1>

            @if (session()->has('message'))

                <div class="alert alert-success">
                    {{ session('message') }}
                </div>

            @endif

            @if ($article_to_check)

                <div class="row justify-content-center">

                    <div class="col-12 col-lg-9">

                        <div class="form-box">

                            <div class="row g-3 mb-4">

                                @for ($i = 1; $i <= 6; $i++)

                                    <div class="col-6 col-md-4">

                                        <div class="revisor-placeholder">
                                            Foto {{ $i }}
                                        </div>

                                    </div>

                                @endfor

                            </div>

                            <p class="section-label">
                                {{ $article_to_check->category->name }}
                            </p>

                            <h2>
                                {{ $article_to_check->title }}
                            </h2>

                            <p class="article-price">
                                € {{ number_format($article_to_check->price, 2, ',', '.') }}
                            </p>

                            <p>
                                {{ $article_to_check->description }}
                            </p>

                            <p>
                                Pubblicato da:
                                <strong>
                                    {{ $article_to_check->user->name }}
                                </strong>
                            </p>

                            <div class="d-flex gap-2 mt-4">

                                <form
                                    method="POST"
                                    action="{{ route('revisor.accept', $article_to_check) }}"
                                >

                                    @csrf
                                    @method('PATCH')

                                    <button
                                        type="submit"
                                        class="btn btn-success"
                                    >
                                        Accetta
                                    </button>

                                </form>

                                <form
                                    method="POST"
                                    action="{{ route('revisor.reject', $article_to_check) }}"
                                >

                                    @csrf
                                    @method('PATCH')

                                    <button
                                        type="submit"
                                        class="btn btn-danger"
                                    >
                                        Rifiuta
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            @else

                <div class="empty-box">

                    <h3>
                        Nessun articolo da revisionare.
                    </h3>

                    <a
                        href="{{ route('home') }}"
                        class="btn btn-presto mt-3"
                    >
                        Torna alla home
                    </a>

                </div>

            @endif

        </div>

    </section>

</x-layout>