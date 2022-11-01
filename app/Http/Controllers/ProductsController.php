<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProductsController extends Controller
{
    /**
     * Acciones:
     * index -> Motrar todos los Productos
     * store -> Guardar Nuevo Producto
     * update -> Actualizar Producto Existente
     * destroy -> Eliminar Producto Existente
     */

    public function index()
    {
        return "hola";
    }

    public function store(Request $request)
    {
        $request->validate([
            'nameProduct' => 'required|min:3|max:255',
            'referenceProduct' => 'required|min:3|max:255',
            'priceProduct' => 'required|min:0',
            'weightProduct' => 'required|min:0',
            'categoryProduct' => 'required|min:3|max:255',
            'stockProduct' => 'required|min:0'
        ]);

        $product = new Product;
        $product->name = $request->nameProduct;
        $product->reference = $request->referenceProduct;
        $product->price = $request->priceProduct;
        $product->weight = $request->weightProduct;
        $product->category = $request->categoryProduct;
        $product->stock = $request->stockProduct; 

        if (!$product->save()) {
            return redirect()->back()->with('Error', 'Falló la creación del Producto');
        }

        return redirect()->route('inicio')->with('Success', 'Producto creado correctamente');
    }
}
