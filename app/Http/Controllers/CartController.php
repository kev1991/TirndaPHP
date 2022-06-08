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
        return view('cart.index');
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
        // 1# pesistir o guardar en una session 
        $producto = [
            'prod_id' => $request->prod_id ,
            'cantidad' => $request->cantidad
        ];

        //guadar los datos en una session 
        

        if (!session('cart')) {
            $aux [] = $producto;
           //1# el primer producto en el carrito
            session('cart', $producto);
        } else {
            #extraer los datos del carrito de la variable de session 
            $aux = $session('cart');
            # eliminae la variable de session
            session()->forget('cart');
            # agrgar el nuevo producto a los ya existentes
            $aux [] = $producto;
            // volver a crear la variable de session con el nuevo producto
            session (['cart' => $aux]);
        }   

        //rediecion al catalogo del producto con un mensaje de añadido al carrito
        return redirect('producto')
                    ->with("mensajito", "producto añadido");
        
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
        //
    }
}
