<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;
use App\Http\Requests\StoreProductoRequest;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "aqui va ir el catalogo de productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Seleccionar marcas en BD: Model Marca
         $marcas = Marca::all();
        //Seleccionar marcas en BD: Model Marca
        $categorias = Categoria::all();
        //Mostar eñ formulario, enviando los datos
        return view ('productos.create')
             ->with("marcas" , $marcas)
             ->with("categorias" , $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {


        
        //validacion exitosa
           //crear una entidad <<producto>>
        $p = new producto();
        $p->nombre=$request->nombre;
        $p->descrpcion= $request->desc;
        $p->precio=$request->precio;
        $p->marca_id=$request->marca;
        $p->categoria_id=$request->categoria;
        $p->save();
        //redirecionar: a una ruta disponible
        return redirect('productos/create')
             ->with('mensaje' , "Producto registrado exitosamente");



        //crear una entidad <<producto>>
        /*$p = new producto();
        $p->nombre=$request->nombre;
        $p->descrpcion= $request->desc;
        $p->precio=$request->precio;
        $p->marca_id=$request->marca;
        $p->categoria_id=$request->categoria;
        $p->save();
        //redirecionar: a una ruta disponible
        return redirect('productos/create')
             ->with('mensaje' , "Producto registrado exitosamente");*/

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "va a mostrar el detalle de producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "se muestra el formulario de editar";
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
        echo "guarda el producto editado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        echo "eliminar el producto";
}
}