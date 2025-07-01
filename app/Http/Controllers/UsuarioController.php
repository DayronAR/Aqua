<?php

namespace App\Http\Controllers;


use App\Models\Usuario;
use App\Models\Cliente;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create()
    {
        $clientes = Cliente::all();
        return view('usuarios.create', compact('clientes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'usuario' => 'required',
            'Password' => 'required',
            'rol' => 'required',
            'ID_cliente' => 'required|exists:clientes,ID_cliente',
        ]);
        Usuario::create($request->only('usuario', 'Password', 'rol', 'ID_cliente'));
        return redirect()->route('dashboard', ['section' => 'usuarios']);
    }
    // ... Métodos index, show, edit, update, destroy ...
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        $clientes = Cliente::all();
        return view('usuarios.edit', compact('usuario', 'clientes'));
    }
}
