<x-guest-layout>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <span class="text-md font-bold text-red-500 text-sm">{{ $error }}</span>
        @endforeach
    @endif

    <div class="grid place-items-center h-screen bg-gray-200">
        <div class="max-w-lg bg-white rounded-md shadow-lg">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Login</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="password">
                            E-mail
                        </label>

                        <input id="email"
                            class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="email" name="email" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password">
                            Password
                        </label>

                        <input id="password"
                            class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                            {{ __('Do Not Have Account Register') }}
                        </a>

                        <button type="submit" class='ml-3 inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
