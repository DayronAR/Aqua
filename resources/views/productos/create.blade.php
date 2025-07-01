<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Producto') }}
        </h2>
    </x-slot>
    <div class="max-w-lg mx-auto bg-white p-8 rounded shadow">
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block font-semibold mb-1">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="descripcion" class="block font-semibold mb-1">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="w-full border rounded px-3 py-2" required></textarea>
            </div>
            <div class="mb-4">
                <label for="capacidad" class="block font-semibold mb-1">Capacidad</label>
                <input type="text" name="capacidad" id="capacidad" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="tecnologia" class="block font-semibold mb-1">Tecnología</label>
                <input type="text" name="tecnologia" id="tecnologia" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="vida_util" class="block font-semibold mb-1">Vida Útil</label>
                <input type="text" name="vida_util" id="vida_util" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="ID_Categoria" class="block font-semibold mb-1">Categoría</label>
                <select name="ID_Categoria" id="ID_Categoria" class="w-full border rounded px-3 py-2" required>
                    <option value="">Selecciona una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->ID_Categoria }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="Stock" class="block font-semibold mb-1">Stock</label>
                <input type="number" name="Stock" id="Stock" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="precio" class="block font-semibold mb-1">Precio</label>
                <input type="number" step="0.01" name="precio" id="precio" class="w-full border rounded px-3 py-2" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
            <a href="{{ route('dashboard', ['section' => 'productos']) }}" class="ml-2 text-gray-600">Cancelar</a>
        </form>
    </div>
</x-app-layout>
