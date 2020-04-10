<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Session;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('featured', true)->take(6)->get();
        $categories = Category::all();

        return view('catalogo')->with([
            'products'=>$products,
            'categories'=>$categories
        ]);
    }


    /**
     * [shearch Buscar las categorias por la ID ]
     *
     * @param   [type]  $id  [$id Parametro que quiero buscar]
     * guardar products. Product"Nombre de la tabla" where en donde caregory_id sea igual al parametro que le pasamos
     *
     * @return  [retorna la mvista catalogo]       [return en donde se envia un producto y su categorira]
     */
    public function shearch($id)
    {

        $products = Product::where('category_id', (int)$id)->get();
        $categories = Category::all();
        return view('catalogo')->with([
            'products'=>$products,
            'categories'=>$categories

        ]);

    }
<<<<<<< HEAD
=======
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function agregarCarrito(Request $request, $id)
    {
        session_start(); //Se inicia la sesion 
        $products = Product::find($id);

        
        $request->session()->push('user.products', $products); 
 
        return redirect('/catalogo');
       

        
    }





    public function verDetalle(Request $request , $id)
    {
        $products = Product::where('id',$id)->get()->all();
        return view('/item')->with('products', $products);
}
    



>>>>>>> 780fe83afad6ad268b16128e91419edcdd2af85a
  
} 