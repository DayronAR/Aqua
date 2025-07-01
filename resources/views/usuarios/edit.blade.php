<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Usuario
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="block font-semibold mb-1">Nombre</label>
                    <input type="text" name="name" id="name" class="w-full border rounded px-3 py-2" value="{{ old('name', $user->name) }}" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block font-semibold mb-1">Email</label>
                    <input type="email" name="email" id="email" class="w-full border rounded px-3 py-2" value="{{ old('email', $user->email) }}" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block font-semibold mb-1">Contraseña (dejar en blanco para no cambiar)</label>
                    <input type="password" name="password" id="password" class="w-full border rounded px-3 py-2">
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block font-semibold mb-1">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border rounded px-3 py-2">
                </div>
                <div class="mb-4">
                    <label for="ID_cliente" class="block font-semibold mb-1">Cliente</label>
                    <select name="ID_cliente" id="ID_cliente" class="w-full border rounded px-3 py-2" required>
                        <option value="">Seleccione un cliente</option>
                        @foreach($clientes as $cliente)
                            <option value="{{ $cliente->ID_cliente }}" {{ old('ID_cliente', $usuario->ID_cliente ?? '') == $cliente->ID_cliente ? 'selected' : '' }}>
                                {{ $cliente->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex gap-2">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">Actualizar Usuario</button>
                    <a href="{{ route('users.index') }}" class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
