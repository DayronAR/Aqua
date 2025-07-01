<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'capacidad' => 'required',
            'tecnologia' => 'required',
            'vida_util' => 'required',
            'ID_Categoria' => 'required|exists:categorias,ID_Categoria',
            'Stock' => 'required|integer',
            'precio' => 'required|numeric',
        ]);
        Producto::create($request->only('nombre', 'descripcion', 'capacidad', 'tecnologia', 'vida_util', 'ID_Categoria', 'Stock', 'precio'));
        return redirect()->route('dashboard', ['section' => 'productos']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'capacidad' => 'required',
            'tecnologia' => 'required',
            'vida_util' => 'required',
            'ID_Categoria' => 'required|exists:categorias,ID_Categoria',
            'Stock' => 'required|integer',
            'precio' => 'required|numeric',
        ]);
        $producto = Producto::findOrFail($id);
        $producto->update($request->only('nombre', 'descripcion', 'capacidad', 'tecnologia', 'vida_util', 'ID_Categoria', 'Stock', 'precio'));
        return redirect()->route('dashboard', ['section' => 'productos']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('dashboard', ['section' => 'productos']);
    }
}
