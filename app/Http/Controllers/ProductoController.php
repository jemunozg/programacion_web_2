<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Va a la vista de gestion_productos
        //Para mostrar todos los datos
        $productos = Producto::all();
        return view('gestion_productos')->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Va la vista crear_productos
        return view('crear_productos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Toma los datos para guardarlos en la BD
        $producto = new Producto();
        $producto->nombre = $request->nom;
        $producto->descripcion = $request->descri;
        $producto->precio = $request->precio;
        $producto->save();
        return redirect()->route('productos.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
