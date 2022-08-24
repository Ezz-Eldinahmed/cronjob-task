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

                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Type</th>
                                <th scope="col">first Name</th>
                                <th scope="col">Car Model</th>
                                <th scope="col">Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($maintenances as $maintenance)
                                <tr>
                                    <th scope="row">{{ $maintenance->id }}</th>
                                    <td>
                                        {{ $maintenance->type }}
                                    </td>
                                    <td>
                                        {{ $maintenance->user->first_name }}
                                    </td>
                                    <td>
                                        {{ $maintenance->car->model }}
                                    </td>

                                    <td>
                                        {{ $maintenance->due_date }}
                                    </td>
                                </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>

                    {{ $maintenances->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
