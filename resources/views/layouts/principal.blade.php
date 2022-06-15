<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
    <title> La tienda kev </title>
</head>
<body>
    <nav class=blue-grey lighten-1">
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo center"> La tienda kev </a>
        <ul class="left hide-on-med-and-down">
            <li class="active"><a href="{{ url('productos/create') }}">Productos</a></li>
            <li class="active"><a href="{{ url('productos/#') }}">Catalogo de producto</a></li>
            <li class="active"><a href="{{ url('cart') }}">Cart</a></li>
        </ul>
        </div>
    </nav>

    <div class="container">
        @yield('contenido')
    </div>

<script src="{{ asset('materialize/js/materialize.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    let tabs = document.querySelector(".tabs")
    var instance = M.Tabs.init(tabs);
    
    var instances = M.FormSelect.init(elems, []);
    });
</script>
</body>
<footer>

    <div class="text-center " style="background-color: black;">
        <a class="text-dark" > © 2022 Copyright:    kev.1991</a>
    </div>
  <!-- Copyright -->
</footer>

</html>