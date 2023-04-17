

<main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="mt-5 md:col-span-2 md:mt-0">

            <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
                <div class="w-full max-w-md space-y-8">
                    <form class="mt-8 space-y-6" action="" method="POST">
                        @csrf
                        <div class="-space-y-px rounded-md shadow-sm">
                        <div>
                            <label for="name" class="sr-only">Name</label>
                            <input id="name" name="name" type="text" required
                                   class="@error('name') border border-red-500 @enderror
                                   relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Name"
                                   value="{{ old('name') }}"
                            >
                            @error('name')
                            <small class="mt-1 block bg-cyan-500 text-sm text-white p-2 mb-4 rounded">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                            <div>
                                <label for="email-address" class="sr-only">Email address</label>
                                <input id="email-address" name="email" type="email"  required
                                    class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="Email address"
                                    value="{{ old('email') }}">
                                 @error('email')
                                <small class="mt-1 block bg-cyan-500 text-sm text-white p-2 mb-4 rounded">
                                       {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="sr-only">Password</label>
                                <input id="password" name="password" type="password" required
                                    class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="Password">
                                @error('password')
                                <small class="mt-1 block bg-cyan-500 text-sm text-white p-2 mb-4 rounded">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="group relative flex w-full justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                Regisztráció
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>

