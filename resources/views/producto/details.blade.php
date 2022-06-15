@extends('layouts.principal')

@section('contenido')

<div class="row">
    <h1>{{ $producto->nombre }}<h1>
</div>
<div class="row">

    <div class="col s8">
        <div class="row">
            <img  width="720px" height="480px"src="{{ asset('img/'.$producto->imagen)}}">
            <div>
                <div class="row">

                    <div class="col s8 ">
                        <ul>
                            <li><strong> Marca :</strong> {{$producto->marca->nombre}}</li>
                            <li><strong> Precio :</strong> {{$producto->precio}}</li>
                            <li><strong> Categoria :</strong> {{$producto->categoria->nombre}}</li>
                            <li><strong> Descripcion :</strong> {{$producto->desc}}</li>
                        </ul>
                    </div>
                </div>          
          </div>
        </div>
    </div>

    <div class="col s4">

        <form action="{{ route('cart.store') }}" method="POST">

            @csrf 
            <div class="row">
                <h3>Añadir al Carrito</h3>
            </div>
            <input type="hidden" name="pro_id" value="{{ $producto->id }}">
            <input type="hidden" name="precio" value="{{ $producto->precio }}">
            <div class="row">
                <div class="col s4 input-field">
                    <select name="Cantidad" id="cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="cantidad">Cantidad</label>
                </div>
            </div>

            <div class="row">
                <div class="col s4 input-field">
                    <button class="btn waves-effect waves-light" type="submit"> AÑADIR  </button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection