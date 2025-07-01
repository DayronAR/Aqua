@extends('admin.dashboard')
@section('admin-content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Detalle del Producto</h2>
    <div class="mb-4">
        <strong>Nombre:</strong> {{ $producto->nombre }}
    </div>
    <div class="mb-4">
        <strong>Descripción:</strong> {{ $producto->descripcion }}
    </div>
    <div class="mb-4">
        <strong>Precio:</strong> S/ {{ number_format($producto->precio, 2) }}
    </div>
    <div class="mb-4">
        <strong>Categoría:</strong> {{ $producto->categoria->nombre ?? '-' }}
    </div>
    <a href="{{ route('admin.productos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
