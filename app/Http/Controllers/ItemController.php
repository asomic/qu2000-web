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
    public function detalle($id)
    {
        $product = Product::where('id',$id)->get()->all();
        return view('/item')->with('product', $product);
    }

    public function add($id)
    {
        $product = Product::find($id); //singular!
 
        //dd(session::get('itemList'));
        //Session:: es lo mismo que session()
        if(Session::has('itemList')){ //verificamos que exista la lista en session
           $list = Session::get('itemList'); // obetenemos la lista de preducto de la seccion
           $list[$product->id] = [ // list es un array de productos y sus cantidades. la llave del arreglo es el id del producto
                'product' => $product->toArray(),              
                'quantity' =>  1        
               
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
    public function update(Request $request , $id)
    {
        //Busco el producto 
        $product = Product::find($id); 
       //Capturo el valor con un request para obtener la cantidad
        $quantity =  $request->quantity;        
        $list = Session::get('itemList'); 
        $list[$product->id] = [
           'product' => $product->toArray(),              
            'quantity' =>  $quantity  
           
       ];
        Session::put('itemList',$list);

      
         return Redirect::back();
 
 
    }

    // public function addq(Request $request,$id)
    // {
    //     $product = Product::find($id); //singular!
    //     $quantity =  $request->quantity;  ;
    //     //dd(session::get('itemList'));
    //     //Session:: es lo mismo que session()
    //     if(Session::has('itemList')){ //verificamos que exista la lista en session
    //        $list = Session::get('itemList'); // obetenemos la lista de preducto de la seccion
    //         $quantity =  $request->quantity; 
    //        $list[$product->id] = [ // list es un array de productos y sus cantidades. la llave del arreglo es el id del producto
    //             'product' => $product->toArray(),              
    //             'quantity' =>  $quantity        
               
    //        ];
    //        Session::put('itemList',$list);
    //     } else { // si no
    //        $list = []; //creamos la lista 
    //        $list[$product->id] = [ // list es un array de productos y sus cantidades. la llave del arreglo es el id del producto
    //             'product' => $product->toArray(),
    //             'quantity' => $quantity 
    //         ];
    //        Session::put('itemList',$list);
    //     }
        
    //     return Redirect::back();



    // }

}