<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Voucher de Compra') }}
        </h2>
    </x-slot>
    <div class="max-w-lg mx-auto bg-white p-8 rounded shadow text-center">
        <h3 class="text-2xl font-bold mb-4">Voucher de Compra</h3>
        <p><strong>ID Venta:</strong> {{ $venta->Id_Pedido }}</p>
        <p><strong>Fecha:</strong> {{ $venta->Fecha }}</p>
        <p><strong>Total:</strong> S/ {{ number_format($venta->Total, 2) }}</p>
        <p><strong>Estado:</strong> {{ $venta->Estado_Envio }}</p>
        <p><strong>Dirección de Envío:</strong> {{ $venta->Dirección_Envio }}</p>
        <p><strong>Ciudad:</strong> {{ $venta->Ciudad_Envio }}</p>
        <p><strong>Código Postal:</strong> {{ $venta->Codigo_Postal }}</p>
        <p><strong>Teléfono de Contacto:</strong> {{ $venta->Telefono_Contacto }}</p>
        <button onclick="window.print()" class="mt-6 bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Imprimir</button>
    </div>
</x-app-layout>
