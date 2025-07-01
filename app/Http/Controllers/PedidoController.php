<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Cliente;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function create()
    {
        $clientes = Cliente::all();
        return view('pedidos.create', compact('clientes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'Fecha' => 'required',
            'Total' => 'required|numeric',
            'Estado_Envio' => 'required',
            'Fecha_Entrega_Estimada' => 'required',
            'Direccion_Envio' => 'required',
            'Ciudad_Envio' => 'required',
            'Codigo_Postal' => 'required',
            'Telefono_Contacto' => 'required',
            'ID_cliente' => 'required|exists:clientes,ID_cliente',
            'Observaciones' => 'nullable',
            'Metodo_Pago' => 'nullable',
        ]);
        Pedido::create($request->only('Fecha', 'Total', 'Estado_Envio', 'Fecha_Entrega_Estimada', 'Direccion_Envio', 'Ciudad_Envio', 'Codigo_Postal', 'Telefono_Contacto', 'ID_cliente', 'Observaciones', 'Metodo_Pago'));
        return redirect()->route('dashboard', ['section' => 'pedidos']);
    }
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        $clientes = Cliente::all();
        return view('pedidos.edit', compact('pedido', 'clientes'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'Fecha' => 'required',
            'Total' => 'required|numeric',
            'Estado_Envio' => 'required',
            'Fecha_Entrega_Estimada' => 'required',
            'Direccion_Envio' => 'required',
            'Ciudad_Envio' => 'required',
            'Codigo_Postal' => 'required',
            'Telefono_Contacto' => 'required',
            'ID_cliente' => 'required|exists:clientes,ID_cliente',
            'Observaciones' => 'nullable',
            'Metodo_Pago' => 'nullable',
        ]);
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->only('Fecha', 'Total', 'Estado_Envio', 'Fecha_Entrega_Estimada', 'Direccion_Envio', 'Ciudad_Envio', 'Codigo_Postal', 'Telefono_Contacto', 'ID_cliente', 'Observaciones', 'Metodo_Pago'));
        return redirect()->route('dashboard', ['section' => 'pedidos']);
    }
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return redirect()->route('dashboard', ['section' => 'pedidos']);
    }
    // ... Métodos index, show ...
}
