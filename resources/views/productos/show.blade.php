<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle del Producto') }}
        </h2>
    </x-slot>
    <div class="max-w-lg mx-auto bg-white p-8 rounded shadow">
        <div class="mb-4">
            <strong>Nombre:</strong> {{ $producto->nombre }}
        </div>
        <div class="mb-4">
            <strong>Stock:</strong> {{ $producto->Stock }}
        </div>
        <div class="mb-4">
            <strong>Precio:</strong> S/ {{ number_format($producto->precio, 2) }}
        </div>
        <a href="{{ route('productos.edit', $producto->ID_Producto) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Editar</a>
        <a href="{{ route('dashboard', ['section' => 'productos']) }}" class="ml-2 text-gray-600">Volver</a>
    </div>
</x-app-layout>
