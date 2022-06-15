@extends('layouts.principal')
@section('contenido')
        <div class="row">
            <h1>Carrito de compras</h1>
        </div>

    @if(!session('cart'))
        <div class="row">
            <p>no hay items en el carrito</p>
        </div>
            
        @else

        <div class="row">
            <div class="col s12">
                <table>
                    <thead>
                        <tr>
                         <th>Productos</th>
                         <th>Cantidad</th>
                         <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach(session('cart') as $index => $pro)
                    <tr>
                         <td>{{  $pro[0]['nombre_pro']  }}</td> 
                         <td>{{  $pro[0]['Cantidad']  }}</td> 
                         <td>{{  $pro[0]['precio']  }}</td> 



                    </tr>
                    @endforeach
                    </tbody>
                </table>

             </div>

        </div>

        <div class="row">
            <form action="{{ route('cart.destroy', 1) }}" method="POST">
            @method('DELETE')
            @csrf
                <button class="btn waves-effect waves-  blue-grey darken-1" type="submit" name="action">
                    Vaciar Run Run
                </button>
            </form>
        </div>

    @endif
@endsection