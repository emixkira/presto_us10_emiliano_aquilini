<x-layout title="Accedi">

    <section class="py-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-12 col-md-8 col-lg-6">

                    <div class="form-box">

                        <p class="section-label">
                            Account
                        </p>

                        <h1 class="mb-4">
                            Accedi
                        </h1>

                        <form
                            method="POST"
                            action="{{ route('login') }}"
                        >

                            @csrf

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

                            <div class="mb-4">

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

                            <button
                                type="submit"
                                class="btn btn-presto"
                            >
                                Accedi
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

</x-layout>