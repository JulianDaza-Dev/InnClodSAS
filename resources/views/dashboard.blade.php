<x-app-layout>
    <x-slot name="header">
        <DIV style="text-align: center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                BIENVENIDO
            </h2>
            
        </DIV>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div style="text-align: center">
                        <a class="btn btn-primary" href="{{route('inicio')}}">COMENZAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
