<footer class="presto-footer">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-12 col-md-6">

                <p class="mb-0">
                    Presto - Compra e vendi ciò che vuoi
                </p>

            </div>

            <div class="col-12 col-md-6 text-md-end mt-3 mt-md-0">

                @auth

                    @if (!auth()->user()->is_revisor)

                        <a
                            href="{{ route('become.revisor') }}"
                            class="btn btn-outline-light"
                        >
                            Lavora con noi
                        </a>

                    @endif

                @endauth

            </div>

        </div>

    </div>

</footer>