<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('featured', true)->take(6)->get();

        return view('index')->with('products', $products);
    }

    public function verDetalle(Request $request , $id)
    {
        $products = Product::where('id',$id)->get()->all();
        return view('/item')->with('products', $products);
}

public function agregarCarrito(Request $request, $id)
{
    session_start(); //Se inicia la sesion 
    $products = Product::find($id);

    
    $request->session()->push('user.products', $products); 

    return redirect('/');
   

    
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//     public function obtenerProductoindex(Request $request, $id)
// {
//     session_start(); //Se inicia la sesion 
//     $products = Product::find($id);

    
//     $request->session()->push('user.products', $products); 

//     return redirect('/');
   

    
// }
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
    // public function sessionhome(Request $request, $id)
    // {
    //     $products = Product::find($id);
     
    //     Session::put(  ['products', $products
    // ]);
       
    //     return redirect('/');  
       

       
    // }
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
