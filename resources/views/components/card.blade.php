@props(['article'])

<div class="card presto-card h-100 mx-auto">

    <div class="card-body d-flex flex-column">

        <p class="section-label mb-2">
            {{ $article->category->name }}
        </p>

        <h5 class="card-title">
            {{ $article->title }}
        </h5>

        <p class="article-price">
            € {{ number_format($article->price, 2, ',', '.') }}
        </p>

        <div class="mt-auto">

            <a
                href="{{ route('article.show', $article) }}"
                class="btn btn-presto"
            >
                Dettaglio
            </a>

            <a
                href="{{ route('article.byCategory', $article->category) }}"
                class="btn btn-outline-secondary"
            >
                {{ $article->category->name }}
            </a>

        </div>

    </div>

</div>