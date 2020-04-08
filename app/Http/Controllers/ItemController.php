<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Session;

class ItemController extends Controller
{
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

    return redirect('/cotizador');
   

    
}
}