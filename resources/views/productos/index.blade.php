@extends('layouts.principal')

@section('contenido')
  <div class="row">
  <h1 class= "green-text text-teal darken-4">Catálogo de productos</h1>
  </div>
  @if(session('mensajito'))
  <div class="row">
    <p>{{ session('mensajito')}}
      <a href="{{route('cart.index')}}">
        Ir al carrito
      </a>
    </p>
  </div>
  @endif
  @foreach($productos as $producto)
  
  <div class="card-action">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="{{asset('img/'.$producto->imagen)}}" widht="300px" height="300px">
    </div>
    <div class= "card-content">
      <span class="card-title activator grey-text text-darken-4"><h4 class= "grey-text text-amber darken-4">{{$producto->nombre}}</h4><i class="material-icons right"><h7>Effetrans</h7></i></span>
      <p><a href="{{ route('productos.show', $producto->id)}}">Detalles del producto</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">{{$producto->descrpcion}}<i class="material-icons right">2022°</i></span>
      <p><h5>${{$producto->precio}}</h5></p>
    </div>
    </div>

  @endforeach
@endsection