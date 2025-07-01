<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        $pedidos = Pedido::with('cliente')->get();
        $productos = Producto::all();
        $ventas = Pedido::all(); // Usar pedidos como ventas
        $users = User::all();

        return view('admin.dashboard', compact('usuarios', 'pedidos', 'productos', 'ventas', 'users'));
    }
}
