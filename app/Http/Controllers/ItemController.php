<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Redirect;
use Session;

class ItemController extends Controller
{
    public function verDetalle(Request $request , $id)
    {
        $products = Product::where('id',$id)->get()->all();
        return view('/item')->with('products', $products);
}

//comentado
// public function agregarCarrito(Request $request, $id)
// {
//     session_start(); //Se inicia la sesion 
//     $products = Product::find($id);

    
//     $request->session()->push('user.products', $products); 

//     return redirect('/cotizador');
   

    
// }

    public function add($id)
    {
        $product = Product::find($id); //singular!
        //dd(session::get('itemList'));
        //Session:: es lo mismo que session()
        if(Session::has('itemList')){ //verificamos que exista la lista en session
           $list = Session::get('itemList'); // obetenemos la lista de preducto de la seccion
           $list[$product->id] = [ // list es un array de productos y sus cantidades. la llave del arreglo es el id del producto
                'product' => $product->toArray(),
                'quantity' => 1
           ];
           Session::put('itemList',$list);
        } else { // si no
           $list = []; //creamos la lista 
           $list[$product->id] = [ // list es un array de productos y sus cantidades. la llave del arreglo es el id del producto
                'product' => $product->toArray(),
                'quantity' => 1
            ];
           Session::put('itemList',$list);
        }
        
        return Redirect::back();



    }

    //borrar
    public function delete($id)
    {
        $list = Session::get('itemList');
        unset($list[$id]);// borramos del arreglo el producto por 
        Session::put('itemList',$list);
        return Redirect::back();
    }

    //actualizar
    public function update($id)
    {
        dd('aca debes crear la logica para actualizar ');
    }

}