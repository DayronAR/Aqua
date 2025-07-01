<h3 class="text-xl font-bold mb-4">Productos</h3>
<div class="overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Stock</th>
                <th class="px-4 py-2">Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $producto->ID_Producto }}</td>
                    <td class="px-4 py-2">{{ $producto->nombre }}</td>
                    <td class="px-4 py-2">{{ $producto->Stock }}</td>
                    <td class="px-4 py-2">S/ {{ number_format($producto->precio, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
