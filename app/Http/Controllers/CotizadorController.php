<?php

namespace App\Http\Controllers;



use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Session;

class CotizadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
        public function verDetalle(Request $request , $id)
    {
        $products = Product::where('id',$id)->get()->all();
        return view('/item')->with('products', $products);
}


    public function deleteObjeto(Request $request,$id)
    {


        session_start(); 
        //Capturamos el id de la pagina
        $products = Product::where('id', '=', $id)->get();
        //Guardamos en una variable values
        // el parametro que queremos
        //eliminar de user.products que se 
        //encuentra en la session 

        //Como poner condicion para eliminar la variable que capturamos
        $value = $request->session()->pull('user.products');


        //Se mandara con algo para actualizar la lista ?
        return redirect('/cotizador');
        


        
      
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
        //
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
