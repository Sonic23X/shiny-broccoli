<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
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
                                <th>Correo</th>
                                <th>Fecha y hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr class="border border-gray-500">
                                <td>
                                    {{$product->name}}
                                </td>
                                <td>
                                    {{$product->desc}}
                                </td>
                                <td>
                                    {{$product->price}}
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
