<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Pedido') }}
        </h2>
    </x-slot>
    <div class="max-w-lg mx-auto bg-white p-8 rounded shadow">
        <form action="{{ route('pedidos.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="Fecha" class="block font-semibold mb-1">Fecha</label>
                <input type="datetime-local" name="Fecha" id="Fecha" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="Total" class="block font-semibold mb-1">Total</label>
                <input type="number" step="0.01" name="Total" id="Total" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="Estado_Envio" class="block font-semibold mb-1">Estado Envío</label>
                <input type="text" name="Estado_Envio" id="Estado_Envio" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="Fecha_Entrega_Estimada" class="block font-semibold mb-1">Fecha Entrega Estimada</label>
                <input type="date" name="Fecha_Entrega_Estimada" id="Fecha_Entrega_Estimada" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="Direccion_Envio" class="block font-semibold mb-1">Dirección Envío</label>
                <input type="text" name="Direccion_Envio" id="Direccion_Envio" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="Ciudad_Envio" class="block font-semibold mb-1">Ciudad Envío</label>
                <input type="text" name="Ciudad_Envio" id="Ciudad_Envio" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="Codigo_Postal" class="block font-semibold mb-1">Código Postal</label>
                <input type="text" name="Codigo_Postal" id="Codigo_Postal" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="Telefono_Contacto" class="block font-semibold mb-1">Teléfono Contacto</label>
                <input type="text" name="Telefono_Contacto" id="Telefono_Contacto" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="ID_cliente" class="block font-semibold mb-1">Cliente</label>
                <select name="ID_cliente" id="ID_cliente" class="w-full border rounded px-3 py-2" required>
                    <option value="">Selecciona un cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->ID_cliente }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="Observaciones" class="block font-semibold mb-1">Observaciones</label>
                <input type="text" name="Observaciones" id="Observaciones" class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="Metodo_Pago" class="block font-semibold mb-1">Método de Pago</label>
                <input type="text" name="Metodo_Pago" id="Metodo_Pago" class="w-full border rounded px-3 py-2">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
            <a href="{{ route('dashboard', ['section' => 'pedidos']) }}" class="ml-2 text-gray-600">Cancelar</a>
        </form>
    </div>
</x-app-layout>
