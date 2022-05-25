<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{  asset('materialize/css/materialize.css')  }}">
    <title></title>
</head>
<body>
<nav class='green darken-2'>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Latienda</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="badges.html">Productos</a></li>
        <li><a href="collapsible.html">Pedidos</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
  @yield('contenido')
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="{{asset('materialize/js/materialize.js')}}"></script>
  <script>
     $(document).ready(function(){
          $('ul.tabs').tabs();
         $('ul.tabs').tabs('select_tab', 'tab_id');
         $('select').formSelect();
});
  </script>
</body>
</html>