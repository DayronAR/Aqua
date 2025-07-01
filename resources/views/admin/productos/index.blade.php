@extends('admin.dashboard')
@section('admin-content')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Productos</h2>
        <a href="{{ route('admin.productos.create') }}" class="btn btn-primary">Nuevo Producto</a>
    </div>
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Descripción</th>
                <th class="py-2 px-4 border-b">Precio</th>
                <th class="py-2 px-4 border-b">Categoría</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td class="py-2 px-4 border-b">{{ $producto->id }}</td>
                <td class="py-2 px-4 border-b">{{ $producto->nombre }}</td>
                <td class="py-2 px-4 border-b">{{ $producto->descripcion }}</td>
                <td class="py-2 px-4 border-b">S/ {{ number_format($producto->precio, 2) }}</td>
                <td class="py-2 px-4 border-b">{{ $producto->categoria->nombre ?? '-' }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('admin.productos.edit', $producto) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('admin.productos.destroy', $producto) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este producto?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
