<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //

    public function index(){
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }

    public function create(){
        return view('agregarProducto');
    }

    public function store(Request $request){
        $producto = new Producto();
        $producto->codigoProducto = $request->input("codigoProducto");
        $producto->nombre = $request->input("nombre");
        $producto->precio = $request->input("precio");
        $producto->stock = $request->input("stock");
        $producto->save();

        return redirect()->route('producto.inicio');
    }
}
