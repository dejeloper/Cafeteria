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
        $products = Product::all();
        return view('productos/index', ['products' => $products]);
    }

    public function add()
    {
        return view('productos/add');
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
            return redirect()->back()->with('error', 'Falló la creación del Producto');
        }

        return redirect()->route('products.index')->with('success', 'Producto creado correctamente');
    }



    public function show($id)
    {
        $products = Product::find($id);
        return view('productos/show', ['product' => $products]);
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->nameProduct;
        $product->reference = $request->referenceProduct;
        $product->price = $request->priceProduct;
        $product->weight = $request->weightProduct;
        $product->category = $request->categoryProduct;
        $product->stock = $request->stockProduct;

        if (!$product->save()) {
            return redirect()->back()->with('error', 'Falló la actualización del Producto');
        }

        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente');
    }


    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product->delete()) {
            return redirect()->route('products.index')->with('error', 'Falló la eliminación del Producto');
        }

        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente');
    }
}
