<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-blue-800 leading-tight">
            {{ __('Panel de Administración') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen bg-gradient-to-br from-blue-100 via-cyan-100 to-white">
        {{-- Menú lateral --}}
        <aside class="w-64 bg-gradient-to-b from-blue-700 to-cyan-500 shadow-lg p-6 space-y-4 text-white">
            <div class="mb-8 flex items-center gap-2">
                <svg class="w-8 h-8 text-cyan-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2C6.477 2 2 6.477 2 12c0 5.523 4.477 10 10 10s10-4.477 10-10C22 6.477 17.523 2 12 2z" /></svg>
                <span class="font-bold text-xl tracking-wide">Aqua Admin</span>
            </div>
            <a href="{{ route('dashboard', ['section' => 'inicio']) }}" class="block py-2 px-4 rounded-lg transition-all duration-200 hover:bg-cyan-200 hover:text-blue-900 {{ request('section', 'inicio') == 'inicio' ? 'bg-cyan-100 text-blue-900 font-bold' : '' }}">Inicio</a>
            <a href="{{ route('dashboard', ['section' => 'usuarios']) }}" class="block py-2 px-4 rounded-lg transition-all duration-200 hover:bg-cyan-200 hover:text-blue-900 {{ request('section') == 'usuarios' ? 'bg-cyan-100 text-blue-900 font-bold' : '' }}">Usuarios</a>
            <a href="{{ route('dashboard', ['section' => 'pedidos']) }}" class="block py-2 px-4 rounded-lg transition-all duration-200 hover:bg-cyan-200 hover:text-blue-900 {{ request('section') == 'pedidos' ? 'bg-cyan-100 text-blue-900 font-bold' : '' }}">Pedidos</a>
            <a href="{{ route('dashboard', ['section' => 'productos']) }}" class="block py-2 px-4 rounded-lg transition-all duration-200 hover:bg-cyan-200 hover:text-blue-900 {{ request('section') == 'productos' ? 'bg-cyan-100 text-blue-900 font-bold' : '' }}">Productos</a>
            <a href="{{ route('dashboard', ['section' => 'ventas']) }}" class="block py-2 px-4 rounded-lg transition-all duration-200 hover:bg-cyan-200 hover:text-blue-900 {{ request('section') == 'ventas' ? 'bg-cyan-100 text-blue-900 font-bold' : '' }}">Ventas</a>
        </aside>

        {{-- Contenido dinámico --}}
        <main class="flex-1 p-10">
            @if(request('section', 'inicio') == 'inicio')
                <h3 class="text-3xl font-bold mb-8 text-blue-900">Bienvenido al panel de administración</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">
                    <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center border-t-4 border-cyan-400">
                        <div class="bg-cyan-100 rounded-full p-3 mb-2"><svg class="w-8 h-8 text-blue-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 0 0-3-3.87M9 20H4v-2a4 4 0 0 1 3-3.87m9-4.13a4 4 0 1 0-8 0 4 4 0 0 0 8 0z" /></svg></div>
                        <div class="text-2xl font-bold text-blue-800">{{ $users->count() }}</div>
                        <div class="text-cyan-700">Usuarios</div>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center border-t-4 border-blue-400">
                        <div class="bg-blue-100 rounded-full p-3 mb-2"><svg class="w-8 h-8 text-cyan-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7v4a1 1 0 0 0 1 1h3m10-5h3a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1h-3m-4 4v4m0 0H7a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-5z" /></svg></div>
                        <div class="text-2xl font-bold text-blue-800">{{ $pedidos->count() }}</div>
                        <div class="text-cyan-700">Pedidos</div>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center border-t-4 border-cyan-400">
                        <div class="bg-cyan-100 rounded-full p-3 mb-2"><svg class="w-8 h-8 text-blue-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 13V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v6m16 0a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2m16 0V7m0 6v6a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-6" /></svg></div>
                        <div class="text-2xl font-bold text-blue-800">{{ $productos->count() }}</div>
                        <div class="text-cyan-700">Productos</div>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center border-t-4 border-blue-400">
                        <div class="bg-blue-100 rounded-full p-3 mb-2"><svg class="w-8 h-8 text-cyan-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 0V4m0 8v8" /></svg></div>
                        <div class="text-2xl font-bold text-blue-800">{{ $ventas->count() }}</div>
                        <div class="text-cyan-700">Ventas</div>
                    </div>
                </div>
                <p class="text-lg text-blue-800">Selecciona una opción del menú para comenzar.</p>
            @elseif(request('section') == 'usuarios')
                {{-- Sección de usuarios deshabilitada, ahora solo se muestra la tabla users (Laravel) --}}
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold mb-4">Usuarios Registrados (Laravel)</h3>
                        <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo Usuario</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Nombre</th>
                                    <th class="px-4 py-2">Email</th>
                                    <th class="px-4 py-2">¿Admin?</th>
                                    <th class="px-4 py-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr class="border-b">
                                        <td class="px-4 py-2">{{ $user->id }}</td>
                                        <td class="px-4 py-2">{{ $user->name }}</td>
                                        <td class="px-4 py-2">{{ $user->email }}</td>
                                        <td class="px-4 py-2">
                                            @if(method_exists($user, 'isAdmin') && $user->isAdmin())
                                                <span class="text-green-600 font-bold">Sí</span>
                                            @else
                                                <span class="text-gray-600">No</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-2 flex gap-2">
                                            <a href="{{ route('users.show', $user->id) }}" class="bg-green-500 hover:bg-green-700 text-white px-2 py-1 rounded">Ver</a>
                                            <a href="{{ route('users.edit', $user->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white px-2 py-1 rounded">Editar</a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este usuario?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-2 py-1 rounded">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @elseif(request('section') == 'pedidos')
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold mb-4">Pedidos</h3>
                        <a href="{{ route('pedidos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo Pedido</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Fecha</th>
                                    <th class="px-4 py-2">Total</th>
                                    <th class="px-4 py-2">Estado</th>
                                    <th class="px-4 py-2">Cliente</th>
                                    <th class="px-4 py-2">Dirección</th>
                                    <th class="px-4 py-2">Observaciones</th>
                                    <th class="px-4 py-2">Método de Pago</th>
                                    <th class="px-4 py-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pedidos as $pedido)
                                    <tr class="border-b">
                                        <td class="px-4 py-2">{{ $pedido->Id_Pedido }}</td>
                                        <td class="px-4 py-2">{{ $pedido->Fecha }}</td>
                                        <td class="px-4 py-2">S/ {{ number_format($pedido->Total, 2) }}</td>
                                        <td class="px-4 py-2">{{ $pedido->Estado_Envio }}</td>
                                        <td class="px-4 py-2">{{ $pedido->cliente->nombre ?? '-' }}</td>
                                        <td class="px-4 py-2">{{ $pedido->Direccion_Envio }}</td>
                                        <td class="px-4 py-2">{{ $pedido->Observaciones }}</td>
                                        <td class="px-4 py-2">{{ $pedido->Metodo_Pago }}</td>
                                        <td class="px-4 py-2 flex gap-2">
                                            <a href="{{ route('pedidos.show', $pedido->Id_Pedido) }}" class="bg-green-500 hover:bg-green-700 text-white px-2 py-1 rounded">Ver</a>
                                            <a href="{{ route('pedidos.edit', $pedido->Id_Pedido) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white px-2 py-1 rounded">Editar</a>
                                            <form action="{{ route('pedidos.destroy', $pedido->Id_Pedido) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este pedido?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-2 py-1 rounded">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @elseif(request('section') == 'productos')
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold">Productos</h3>
                        <a href="{{ route('productos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo Producto</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Nombre</th>
                                    <th class="px-4 py-2">Descripción</th>
                                    <th class="px-4 py-2">Capacidad</th>
                                    <th class="px-4 py-2">Tecnología</th>
                                    <th class="px-4 py-2">Vida Útil</th>
                                    <th class="px-4 py-2">Categoría</th>
                                    <th class="px-4 py-2">Stock</th>
                                    <th class="px-4 py-2">Precio</th>
                                    <th class="px-4 py-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productos as $producto)
                                    <tr class="border-b">
                                        <td class="px-4 py-2">{{ $producto->ID_Producto }}</td>
                                        <td class="px-4 py-2">{{ $producto->nombre }}</td>
                                        <td class="px-4 py-2">{{ $producto->descripcion }}</td>
                                        <td class="px-4 py-2">{{ $producto->capacidad }}</td>
                                        <td class="px-4 py-2">{{ $producto->tecnologia }}</td>
                                        <td class="px-4 py-2">{{ $producto->vida_util }}</td>
                                        <td class="px-4 py-2">{{ $producto->ID_Categoria }}</td>
                                        <td class="px-4 py-2">{{ $producto->Stock }}</td>
                                        <td class="px-4 py-2">S/ {{ number_format($producto->precio, 2) }}</td>
                                        <td class="px-4 py-2 flex gap-2">
                                            <a href="{{ route('productos.show', $producto->ID_Producto) }}" class="bg-green-500 hover:bg-green-700 text-white px-2 py-1 rounded">Ver</a>
                                            <a href="{{ route('productos.edit', $producto->ID_Producto) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white px-2 py-1 rounded">Editar</a>
                                            <form action="{{ route('productos.destroy', $producto->ID_Producto) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este producto?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-2 py-1 rounded">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @elseif(request('section') == 'ventas')
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4">Ventas</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Fecha</th>
                                    <th class="px-4 py-2">Total</th>
                                    <th class="px-4 py-2">Estado</th>
                                    <th class="px-4 py-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ventas as $venta)
                                    <tr class="border-b">
                                        <td class="px-4 py-2">{{ $venta->Id_Pedido }}</td>
                                        <td class="px-4 py-2">{{ $venta->Fecha }}</td>
                                        <td class="px-4 py-2">S/ {{ number_format($venta->Total, 2) }}</td>
                                        <td class="px-4 py-2">{{ $venta->Estado_Envio }}</td>
                                        <td class="px-4 py-2 flex gap-2">
                                            <a href="{{ route('ventas.voucher', $venta->Id_Pedido) }}" class="bg-indigo-500 hover:bg-indigo-700 text-white px-2 py-1 rounded" target="_blank">Imprimir Voucher</a>
                                            <a href="{{ route('ventas.show', $venta->Id_Pedido) }}" class="bg-green-500 hover:bg-green-700 text-white px-2 py-1 rounded">Ver</a>
                                            <a href="{{ route('ventas.edit', $venta->Id_Pedido) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white px-2 py-1 rounded">Editar</a>
                                            <form action="{{ route('ventas.destroy', $venta->Id_Pedido) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar esta venta?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-2 py-1 rounded">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </main>
    </div>
</x-app-layout>
