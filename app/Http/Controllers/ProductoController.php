<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\storeProductoRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //selecciono todos los productos en un arreglo
        $productos = Producto::all();
        //mostrar la vista del catalogo llevandole  los productos
        return view('producto.index')
        ->with('productos' , $productos);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('producto.create')->with("marcas", $marcas)->with("categorias", $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeProductoRequest $request)
    {


        //2.crear validacion
        $p = new Producto();
        $p->nombre = $request->nombre;
        $p->desc = $request->desc;
        $p->precio = $request->precio;
        $p->marca_id = $request->marca;
        $p->categoria_id = $request->categoria;
        
        //objeto file
        $archivo = $request->imagen;
        $p->imagen = $archivo->getClientOriginalName();
        //ruta donde se almacena el archivo
        $ruta = public_path()."/img";
        //movemos archivo a ruta
        $archivo->move($ruta ,
                          $archivo->getClientOriginalName());
        $p->save();
        //redireccionar: a una ruta disponible
        return redirect('productos/create')
            ->with('mensaje', "Producto registrado exitosamente");

        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        //seleccionar el producto
        $p = Producto::find($producto);
        //mostrar la vista del producto elegido
        return view('producto.details')
        ->with('producto' , $p);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "Aquí se muestra el form de editar producto.";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        echo "Guarda el producto editado.";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        echo "Eliminar el producto.";
    }
}
