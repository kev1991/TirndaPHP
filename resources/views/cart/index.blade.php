@extends('extends.principal')

@section('contenido')
<div class= "row">
     <h1>Carrito de compras</h1>
</div>
<div class="row">
    <div class="col s12">
        <table>
            <thead>
                <tr>Producto</tr>
                <tr>Cantidad</tr>
            </thead>
            <tbody>
            @foreach(session('cart') as $index => $prod)
            <tr>
                <td>{{$prod[0][nombre prod] }}</td>
                <td>{{$prod[0][cantidad] }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
<form action="{{route('cart.destroy, 1)}}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">
       Desocupar Carrito
    </button>
</form>
</div>
@endsection