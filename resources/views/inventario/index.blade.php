@extends('app')

@section('content')
<div class="container w-50 border p-4 mt-4">
    <form>
        <div class="mb-3">
            <label for="nameProduct" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" id="nameProduct" placeholder="Nombre del producto" />
        </div>
        <div class="mb-3">
            <label for="referenceProduct" class="form-label">Referencia del Producto</label>
            <input type="text" class="form-control" id="referenceProduct" placeholder="Referencia del producto" />
        </div>
        <div class="mb-3">
            <label for="priceProduct" class="form-label">Precio del Producto</label>
            <input type="number" min="0" class="form-control" id="priceProduct" placeholder="Precio del producto" />
        </div>
        <div class="mb-3">
            <label for="weightProduct" class="form-label">Peso del Producto (grs)</label>
            <input type="number" min="0" class="form-control" id="weightProduct" placeholder="Peso del producto" />
        </div>
        <div class="mb-3">
            <label for="categoryProduct" class="form-label">Categoría del Producto</label>
            <input type="text" class="form-control" id="categoryProduct" placeholder="Categoría del producto" />
        </div>
        <div class="mb-3">
            <label for="stockProduct" class="form-label">Stock del Producto</label>
            <input type="number" min="0" class="form-control" idstockmeProduct" placeholder="Stock del producto" />
        </div>
        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>
@endsection