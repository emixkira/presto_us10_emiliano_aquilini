<x-layout :title="$article->title">

    <section class="py-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-12 col-lg-9">

                    <p class="section-label">
                        {{ $article->category->name }}
                    </p>

                    <h1 class="mb-3">
                        {{ $article->title }}
                    </h1>

                    <p class="article-price article-price-large">
                        € {{ number_format($article->price, 2, ',', '.') }}
                    </p>

                    <div
                        id="articleCarousel"
                        class="carousel slide my-4"
                    >

                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <div class="placeholder-image">
                                    Immagine annuncio 1
                                </div>

                            </div>

                            <div class="carousel-item">

                                <div class="placeholder-image">
                                    Immagine annuncio 2
                                </div>

                            </div>

                            <div class="carousel-item">

                                <div class="placeholder-image">
                                    Immagine annuncio 3
                                </div>

                            </div>

                        </div>

                        <button
                            class="carousel-control-prev"
                            type="button"
                            data-bs-target="#articleCarousel"
                            data-bs-slide="prev"
                        >

                            <span class="carousel-control-prev-icon"></span>

                        </button>

                        <button
                            class="carousel-control-next"
                            type="button"
                            data-bs-target="#articleCarousel"
                            data-bs-slide="next"
                        >

                            <span class="carousel-control-next-icon"></span>

                        </button>

                    </div>

                    <div class="article-description">

                        <h3>
                            Descrizione
                        </h3>

                        <p>
                            {{ $article->description }}
                        </p>

                    </div>

                    <div class="mt-4">

                        <p>
                            Pubblicato da:
                            <strong>
                                {{ $article->user->name }}
                            </strong>
                        </p>

                        <a
                            href="{{ route('article.byCategory', $article->category) }}"
                            class="btn btn-outline-secondary"
                        >
                            Altri annunci in {{ $article->category->name }}
                        </a>

                        <a
                            href="{{ route('article.index') }}"
                            class="btn btn-presto"
                        >
                            Torna agli annunci
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

</x-layout>