<div class="form-box">

    <p class="section-label">
        Nuovo annuncio
    </p>

    <h1 class="mb-4">
        Inserisci un annuncio
    </h1>

    @if (session()->has('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

    <form wire:submit="store">

        <div class="mb-3">

            <label
                for="title"
                class="form-label"
            >
                Titolo
            </label>

            <input
                type="text"
                id="title"
                wire:model.blur="title"
                class="form-control"
            >

            @error('title')
                <p class="text-danger mt-2">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <div class="mb-3">

            <label
                for="description"
                class="form-label"
            >
                Descrizione
            </label>

            <textarea
                id="description"
                wire:model.blur="description"
                rows="6"
                class="form-control"
            ></textarea>

            @error('description')
                <p class="text-danger mt-2">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <div class="mb-3">

            <label
                for="price"
                class="form-label"
            >
                Prezzo
            </label>

            <input
                type="number"
                id="price"
                step="0.01"
                wire:model.blur="price"
                class="form-control"
            >

            @error('price')
                <p class="text-danger mt-2">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <div class="mb-4">

            <label
                for="category"
                class="form-label"
            >
                Categoria
            </label>

            <select
                id="category"
                wire:model.blur="category"
                class="form-select"
            >

                <option value="">
                    Seleziona una categoria
                </option>

                @foreach ($categories as $category)

                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>

                @endforeach

            </select>

            @error('category')
                <p class="text-danger mt-2">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <button
            type="submit"
            class="btn btn-presto"
        >
            Inserisci annuncio
        </button>

    </form>

</div>