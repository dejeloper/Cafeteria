@extends('app')

@section('title','Agregar Nuevo Producto')

@section('content')
<div class="container w-50 border p-4 mt-4">
    <form method="POST" action="{{route('products.store')}}">
        @csrf

        @if (session('success'))
        <h6 class="alert alert-success">{{session('success')}}</h6>
        @endif

        <div class="mb-3">
            <label for="nameProduct" class="form-label">Nombre del Producto</label>
            <div class="inputContainer">
                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus id="nameProduct" name="nameProduct" placeholder="Nombre del producto" />
                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="mb-3">
            <label for="referenceProduct" class="form-label">Referencia del Producto</label>
            <div class="inputContainer">
                <input type="text" class="form-control{{ $errors->has('reference') ? ' is-invalid' : '' }}" value="{{ old('reference') }}" id="referenceProduct" name="referenceProduct" placeholder="Referencia del producto" />
                @if ($errors->has('reference'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('reference') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="mb-3">
            <label for="priceProduct" class="form-label">Precio del Producto</label>
            <div class="inputContainer">
                <input type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="{{ old('price') }}" id="priceProduct" name="priceProduct" placeholder="Precio del producto" />
                @if ($errors->has('price'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="mb-3">
            <label for="weightProduct" class="form-label">Peso del Producto (grs)</label>
            <div class="inputContainer">
                <input type="text" class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}" value="{{ old('weight') }}" id="weightProduct" name="weightProduct" placeholder="Peso del producto" />
                @if ($errors->has('weight'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('weight') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="mb-3">
            <label for="categoryProduct" class="form-label">Categoría del Producto</label>
            <div class="inputContainer">
                <input type="text" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" value="{{ old('category') }}" id="categoryProduct" name="categoryProduct" placeholder="Categoría del producto" />
                @if ($errors->has('category'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('category') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="mb-3">
            <label for="stockProduct" class="form-label">Stock del Producto</label>
            <div class="inputContainer">
                <input type="text" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" value="{{ old('stock') }}" id="stockProduct" name="stockProduct" placeholder="Stock del producto" />
                @if ($errors->has('stock'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('stock') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>

<div class="container w-75 border p-4 mt-4">
    <div>
        @foreach ($products as $product)
        <div class="row py-1">
            <div class="col-md-9 d-flex align-items-center">
                <a href="#}}">{{$product->name}}</a>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <form action="#}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection