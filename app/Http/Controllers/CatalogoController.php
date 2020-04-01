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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sessionOBjeto(Request $request, $id)
    {
        $products = Product::find($id);
   
        Session::put(  ['products' => $products
                          ]);
      
      
        
        return redirect('/catalogo');  
       

       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function add(Product $product)
    // {
    //     $cart = \Session::get('cart');
    //     $product->quantity = 1;
    //     $cart[$products->id] = $product
    //     \Session::put('cart', $cart);
    //     return redirect()->route('/catalogo');/
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function _contruct()
    // {
    //     if(!\Session::has('cart')) \Session::put('cart', array());
    // }

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
      
    }
}
