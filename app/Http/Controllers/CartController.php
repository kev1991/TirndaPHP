<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


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
        
        //estructura de producto
        $producto = [ [

        "pro_id" => $request->pro_id ,
        "precio" => $request->precio,
        "Cantidad"=> $request->Cantidad, 
        "nombre_pro"=> Producto::find($request->pro_id)->nombre       
         ] ];

       
if(!session('cart')){

    $aux[] = $producto;
  //el 1 producto el carrito
    session(['cart' => $aux]);

}else{


      //estraer los datos
      $aux =session('cart');
      //-eliminar variable session nnnn
      session()->forget('cart');
      
      //agreggar nuevo producto a los ya existentes
      $aux[] = $producto;
      //-volver a crear la variable session
      session(['cart' => $aux]);

}  
    
//redireccion al catalogo
//con mensaje de  añadido
return redirect('productos')
->with("mensajito", "Producto añadido con exito");

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
        return redirect('cart');
    }
}
