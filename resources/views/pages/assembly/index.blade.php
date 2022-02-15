<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Historico de asambleas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-2">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Historico de asambleas') }}
            </h2>
            <a href="{{ route('asambleas.create') }}">
                Nueva Asamblea
            </a>
        </div>
        <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    <table class="table-auto border border-gray-500 w-full">
                        <thead class="border border-gray-500 bg-gray-500">
                            <tr>
                                <th>Tema</th>
                                <th>Fecha de sesión</th>
                                <th>URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sessions as $session)
                            <tr class="border border-gray-500">
                                <td>
                                    {{$session->theme}}
                                </td>
                                <td>
                                    {{$session->date}}
                                </td>
                                <td>
                                    <a href="{{$session->video}}">Ver video</a>
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
