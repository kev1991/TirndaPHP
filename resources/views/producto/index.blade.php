@EXTENDS('layouts.principal')

@section('contenido')
    <div class="row" style="text-align: center;">
      <h1 class="white-text blue-grey darken-3"> Catalogo De Productos </h1>
    </div>
    @if(session('mensajito'))
      <div class="row">
        <p>{{session('mensajito')}} <a href="{{route('cart.index')}}">Ir al Run Run</a></p>
      </div>
    @endif

    @foreach($productos as $producto)
      <div class="row">
        <div class="col s12 m4">
          <div class="card">
              <div class="card-image ">
                <img  width="720px" height="280px"src="{{ asset('img/'.$producto->imagen)}}">
              </div>
              <div class="card-content">
                  <ul>
                  <li>{{ $producto->nombre}}</li>                
                      <li>Precio: {{ $producto->precio}}</li>
                      <li>Descripcion: {{ $producto->desc}}</li>
                      

                  
                  </ul>
                </div>        
                <div class="card-action">
                <a href="{{ route('productos.show' , $producto->id )}}">Ver detalles</a>
              </div>
          </div>
        </div>
    @endforeach
      </div>
@endsection