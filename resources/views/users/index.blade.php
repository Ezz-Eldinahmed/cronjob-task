<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

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

                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Mobile Number</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>
                                        <a href="{{ route('users.show', $user) }}">
                                            {{ $user->first_name }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('users.show', $user) }}">
                                            {{ $user->last_name }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('users.show', $user) }}">
                                            {{ $user->mobile_number }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('users.edit', $user) }}"><i class="fas fa-edit  ml-5"></i></a>
                                    </td>

                                    <td>

                                        <form method="POST" action="{{ route('users.destroy', $user) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <i class="fa fa-trash  ml-3" aria-hidden="true"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>

                    {{$users->links()}}

                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
