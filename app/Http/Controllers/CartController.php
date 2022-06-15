<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    if(!session('cart')){
        echo "No hay items en el carrito";{}
    }else{
        return view('cat.index');
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Estructuro de producto
        $producto = [    [
                            "prod_id" => $request->prod_id,
                            "cantidad" => $request ->cantidad,
                            "nombre prod" => Producto::find($request->prod_id)->nombre 
                             ]
    ];                                  

        if( !session('cart')){

            $aux[] = $producto;
        //1. El primer producto en el carrito
            session (['cart'=> $producto]); 

        }else{
            //Extraer los datos del carrito de la variable de sesion
            $aux = session('cart');
            //Eliminar la variable de la sesion:
            session()->forget('cart');
            //Agregar el nuevo producto a los ya existentes:
            $aux[] = $producto;
            //Volver a crear la variable se session con el nuevo producto
            session(['cart' => $aux]);              
    }

        //2. Redirección al catalogo de productos con mensaje de exito
        return redirect('productos')
        -> with("mensajito", "producto añadido");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session()->forget('cart');
    }
}
