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
                        <form action="{{ route('cars.store') }}" method="POST">
                            @csrf

                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="model"
                                            class="block text-sm font-medium text-gray-700">Model</label>
                                        <input type="text" name="model" value="{{ old('model') }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="body_number" class="block text-sm font-medium text-gray-700">body
                                            Number</label>
                                        <input type="text" name="body_number" value="{{ old('body_number') }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="motor_number" class="block text-sm font-medium text-gray-700">Motor
                                            Number</label>
                                        <input type="text" name="motor_number" value="{{ old('motor_number') }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="color"
                                            class="block text-sm font-medium text-gray-700">Color</label>
                                        <input type="text" name="color" value="{{ old('color') }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="model_year" class="block text-sm font-medium text-gray-700">Model
                                            Year</label>
                                        <input type="text" name="model_year" value="{{ old('model_year') }}"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="user_id"
                                            class="block text-sm font-medium text-gray-700">User</label>
                                        <select id="user_id" name="user_id" autocomplete="user_id-name"
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            @forelse ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->first_name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>

                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
