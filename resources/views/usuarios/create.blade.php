<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Usuario') }}
        </h2>
    </x-slot>
    <div class="max-w-lg mx-auto bg-white p-8 rounded shadow">
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="usuario" class="block font-semibold mb-1">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="Password" class="block font-semibold mb-1">Contraseña</label>
                <input type="password" name="Password" id="Password" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="rol" class="block font-semibold mb-1">Rol</label>
                <input type="text" name="rol" id="rol" class="w-full border rounded px-3 py-2" required>
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
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
            <a href="{{ route('dashboard', ['section' => 'usuarios']) }}" class="ml-2 text-gray-600">Cancelar</a>
        </form>
    </div>
</x-app-layout>
