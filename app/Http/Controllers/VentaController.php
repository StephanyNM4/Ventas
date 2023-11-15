<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Venta;

class VentaController extends Controller
{
    //

    public function index(){
        $ventas = Venta::all();
        return view('mostrarVentas', compact('ventas'));
    }

    public function create(){
        $productos = Producto::all();
        return view('venta', compact('productos'));
    }

    public function store(Request $request){
        $venta = new Venta();
        $venta->codigoProducto = $request->input("codigoProducto");
        $venta->cantidad = $request->input("cantidad");
        $producto = Producto::find($venta->codigoProducto);
        $venta->subtotal= $producto->precio * $venta->cantidad;
        $venta->isv = $venta->subtotal * 0.15;
        $venta->total = $venta->subtotal + $venta->isv;
        $timestamp = time();
        $venta->fechaVenta = date('Y-m-d H:i:s', $timestamp);
        $venta->save();
        return $venta;
    }
}
