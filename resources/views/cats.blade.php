<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gatos en adopción') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    <table class="table-auto border border-gray-500 w-full">
                        <thead class="border border-gray-500 bg-gray-500">
                            <tr>
                                <th>Nombre</th>
                                <th>Raza</th>
                                <th>Edad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cats as $cat)
                            <tr class="border border-gray-500">
                                <td>
                                    {{$cat->name}}
                                </td>
                                <td>
                                    {{$cat->breed}}
                                </td>
                                <td>
                                    {{$cat->age}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
