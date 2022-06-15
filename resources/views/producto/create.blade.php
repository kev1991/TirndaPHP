@extends('layouts.principal')

@section ('contenido')

<div class="row " style="text-align: center;">
  <h1 class=" white-text blue-grey darken-3" style=" text"> Nuevo Producto </h1>
</div>

<div class="row">
    <form method="POST"
     action="{{ route('productos.store') }}" 
     class="col s12" 
     enctype="multipart/form-data">

      @csrf
      @if(session('mensaje'))
      <div class="row">
        <div class="col s8">
          
          <span class="teal-text ">
            {{ session('mensaje') }}
          </span>
        </div>
      </div>

      @endif


      <div class="row">
        <div class="input-field col s8">
          <input placeholder="Nombre de Producto" id="nombre" type="text" class="validate" name="nombre">
          <label for="nombre" >Nombre de producto</label>
          <span>{{ $errors->first('nombre') }}</span>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <textarea class="materialize-textarea" id="desc" name="desc"></textarea>
          <label for="desc">Descripción</label>
          <span>{{ $errors->first('desc') }}</span>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="precio" type="text" class="validate" name="precio">
          <label>Precio</label>
          <span>{{ $errors->first('precio') }}</span>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <div class="file-field input-field">
            <div class="btn  blue-grey darken-1">
              <span>Imagen del Producto</span>
              <input type="file" name="imagen">
            </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
          <span>{{$errors->first('imagen')}}</span>
        </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <select name="categoria">
            <option value="" disabled selected>Elija una Categoría</option>
            @foreach($categorias as $categoria)
              <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
          </select>
          <label>Categorías Disponibles</label>
          <span>{{ $errors->first('categoria') }}</span>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <select name="marca">
            <option value="" disabled selected>Elija una Marca</option>
            @foreach($marcas as $marca)
              <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
            @endforeach
          </select>
          <label>Marcas Disponibles</label>
          <span>{{ $errors->first('marca') }}</span>
        </div>
      </div>
      <div class="row">
        <div class="col s8">
          <button class="btn waves-effect waves-  blue-grey darken-1" type="submit" name="action">Guardar</button>
        </div>
      </div>
    </form>
  </div>
@endsection