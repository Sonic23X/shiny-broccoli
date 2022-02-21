<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (Auth::user()->hasRole('admin'))
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Log') }}
                </h2>
            </div>
            <br>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 text-center">
                        <table class="table-auto border border-gray-500 w-full">
                            <thead class="border border-gray-500 bg-gray-500">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Status</th>
                                    <th>Fecha y hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($logs as $log)
                                <tr class="border border-gray-500">
                                    <td>
                                        {{$log->user->name}}
                                    </td>
                                    <td>
                                        {{$log->user->email}}
                                    </td>
                                    <td>
                                        @if ($log->status == 1)
                                        Exitoso
                                        @else
                                        Fallido
                                        @endif
                                    </td>
                                    <td>
                                        {{$log->access->toDateTimeString()}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Bienvenido al sistema') }}
                </h2>
            </div>
        </div>
    @endif
</x-app-layout>
