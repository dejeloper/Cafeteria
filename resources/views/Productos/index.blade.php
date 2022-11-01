@extends('app')

@section('title','Todos los Productos')

@section('content')
<div class="container w-75 border p-4 mt-4">
    <h3>Listado de Productos</h3>
    <div class="d-flex justify-content-end">
        <a class="btn btn-primary my-3" href="{{route('products.add')}}">Agregar Producto</a>
    </div>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div>
        <div class="row py-1">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Referencia</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Fecha Creación</th>
                        <th scope="col" class="text-center" colspan="2">Opciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $product)
                    <tr>
                        <th>{{$product->name}}</th>
                        <td>{{$product->reference}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->weight}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{date('d-M-y', strtotime($product->created_at))}}</td>
                        <td>
                            <a class="btn btn-outline-secondary mx-1 btn-sm" style="height: 32px;" href="{{route('products.show', ['id' => $product->id])}}" role="button">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('products.delete', [$product->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger mx-1 btn-sm" style="height: 32px;">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection