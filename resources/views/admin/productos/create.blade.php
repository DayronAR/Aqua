@extends('admin.dashboard')
@section('admin-content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Nuevo Producto</h2>
    <form action="{{ route('admin.productos.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nombre</label>
            <input type="text" name="nombre" class="form-input w-full" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Descripción</label>
            <textarea name="descripcion" class="form-input w-full" required></textarea>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Precio (S/)</label>
            <input type="number" name="precio" step="0.01" class="form-input w-full" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Categoría</label>
            <select name="categoria_id" class="form-input w-full" required>
                <option value="">Seleccione una categoría</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('admin.productos.index') }}" class="btn btn-secondary ml-2">Cancelar</a>
    </form>
</div>
@endsection
