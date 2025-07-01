<h3 class="text-xl font-bold mb-4">Pedidos</h3>
<div class="overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Fecha</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $pedido->Id_Pedido }}</td>
                    <td class="px-4 py-2">{{ $pedido->Fecha }}</td>
                    <td class="px-4 py-2">S/ {{ number_format($pedido->Total, 2) }}</td>
                    <td class="px-4 py-2">{{ $pedido->Estado_Envio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
