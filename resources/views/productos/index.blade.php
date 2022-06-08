@extends('layouts.principal')


@section('contenido')
    <div class='row green'>
        <h1>Catalogo de producto</h1>
        @if(session('mensajito'))
            <div class="row">
                <p>{{ session('mensajito') }} <a href=""></a></p>
            </div>
        @endif
    </div>  
    @php
        $tab1 = 4;
        $tab2 = 5;
        $tab3 = 6;
    @endphp
    @foreach($productos as $producto)
    <div class="row">
        <div class="card">
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a href="#test{{ $tab1  }}">Test 1 </a></li>
                    <li class="tab"><a class="active" href="#test{{ $tab2 }}">Test 2</a></li>
                    <li class="tab"><a href="#test{{ $tab3 }}">Test 3</a></li>
                </ul>
            </div>
            <div class="card-content grey lighten-4">
                <div id="test{{ $tab1 }}">Test 1</div>
                <div id="test{{ $tab2 }}">Test 2</div>
                <div id="test{{ $tab3 }}">Test 3</div>
            </div>
        </div>
    </div>
    @php
        $tab1+=3;
        $tab2+=3;
        $tab3+=3;
    @endphp
          
    @endforeach
@endsection

