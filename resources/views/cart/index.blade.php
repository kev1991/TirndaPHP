@extends('layouts.principal')

@section('contenido')
    <div class="row">
        <h1>carrito de compras</h1>
    </div>

   
        <div class="row">
            <div class="col s12">
                <table>
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach(session('cart') as $prod )   
                        <tr>
                            <th>{{ $prod[0]['prod_id'] }}</th>
                            <th>{{ $prod[0]['cantidad'] }}</th>
                        </tr>
                      @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
   
@endsection