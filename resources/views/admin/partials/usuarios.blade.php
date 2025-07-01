<h3 class="text-xl font-bold mb-4">Usuarios</h3>
<div class="overflow-x-auto">
    <table class="min-w-full text-sm">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Usuario</th>
                <th class="px-4 py-2">Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $usuario->id_usuario }}</td>
                    <td class="px-4 py-2">{{ $usuario->usuario }}</td>
                    <td class="px-4 py-2">{{ $usuario->rol }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
