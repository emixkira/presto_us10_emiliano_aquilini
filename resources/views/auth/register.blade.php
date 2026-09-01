<x-layout title="Registrati">

    <section class="py-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-12 col-md-8 col-lg-6">

                    <div class="form-box">

                        <p class="section-label">
                            Account
                        </p>

                        <h1 class="mb-4">
                            Registrati
                        </h1>

                        <form
                            method="POST"
                            action="{{ route('register') }}"
                        >

                            @csrf

                            <div class="mb-3">

                                <label
                                    for="name"
                                    class="form-label"
                                >
                                    Nome
                                </label>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="form-control"
                                    value="{{ old('name') }}"
                                >

                                @error('name')
                                    <p class="text-danger mt-2">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label
                                    for="email"
                                    class="form-label"
                                >
                                    Email
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-control"
                                    value="{{ old('email') }}"
                                >

                                @error('email')
                                    <p class="text-danger mt-2">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label
                                    for="password"
                                    class="form-label"
                                >
                                    Password
                                </label>

                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    class="form-control"
                                >

                                @error('password')
                                    <p class="text-danger mt-2">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>

                            <div class="mb-4">

                                <label
                                    for="password_confirmation"
                                    class="form-label"
                                >
                                    Conferma password
                                </label>

                                <input
                                    type="password"
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    class="form-control"
                                >

                            </div>

                            <button
                                type="submit"
                                class="btn btn-presto"
                            >
                                Registrati
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

</x-layout>