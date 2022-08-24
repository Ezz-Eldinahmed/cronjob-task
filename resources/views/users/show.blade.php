<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    @if (session()->has('success'))
        <div class="p-2" class="shadow-md">
            <div class="inline-flex items-center bg-white leading-none rounded-full p-2 shadow text-sm"
                style="color: green">
                <span style="background: green"
                    class="inline-flex text-white rounded-full h-6 px-3 justify-center items-center text-">Success</span>
                <span class="inline-flex px-2">{{ session()->get('success') }}</span>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-200 border-b border-gray-200">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2"> {{ $user->first_name }}
                                </div>
                                <p class="text-gray-700 text-base">
                                    {{ $user->last_name }}
                                </p>
                                <p> {{ $user->mobile_number }}
                                </p>
                            </div>
                            <div class="px-6 pt-4 pb-2">
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                    <a href="{{ route('users.edit', $user) }}"><i class="fas fa-edit  ml-5"></i></a>
                                </span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                    <form method="POST" action="{{ route('users.destroy', $user) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="fa fa-trash  ml-3" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                    <a href="{{ route('cars.create') }}">Add Car +</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
