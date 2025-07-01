@extends('admin.dashboard')
@section('admin-content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Editar Producto</h2>
    <form action="{{ route('admin.productos.update', $producto) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nombre</label>
            <input type="text" name="nombre" class="form-input w-full" value="{{ $producto->nombre }}" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Descripción</label>
            <textarea name="descripcion" class="form-input w-full" required>{{ $producto->descripcion }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Precio (S/)</label>
            <input type="number" name="precio" step="0.01" class="form-input w-full" value="{{ $producto->precio }}" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Categoría</label>
            <select name="categoria_id" class="form-input w-full" required>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" @if($producto->categoria_id == $categoria->id) selected @endif>{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('admin.productos.index') }}" class="btn btn-secondary ml-2">Cancelar</a>
    </form>
</div>
@endsection
