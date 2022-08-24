<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-200 border-b border-gray-200">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <span class="text-md font-bold text-red-500 text-sm">{{ $error }}</span>
                        @endforeach
                    @endif

                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="{{ route('users.update', $user) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                            name</label>
                                        <input type="text" name="first_name"
                                            value="{{ old('first_name', $user->first_name) }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        @error('first_name')
                                            <span class="text-md font-bold text-red-500 text-sm">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last
                                            name</label>
                                        <input type="text" name="last_name"
                                            value="{{ old('last_name', $user->last_name) }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        @error('last_name')
                                            <span class="text-md font-bold text-red-500 text-sm">{{ $message }}</span>
                                        @enderror

                                    </div>


                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="postal-code" class="block text-sm font-medium text-gray-700">Mobile
                                            Number</label>
                                        <input type="text" name="mobile_number"
                                            value="{{ old('mobile_number', $user->mobile_number) }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        @error('name')
                                            <span class="text-md font-bold text-red-500 text-sm">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
