<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function voucher($id)
    {
        $venta = Pedido::findOrFail($id);
        return view('ventas.voucher', compact('venta'));
    }
}
