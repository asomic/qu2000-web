<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

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
    public function array($id)
    {

        $products = Product::where('id', (int)$id)->get();


        return view('cotizador')->with([
            'products'=>$products



        ]);


        // $session = array_add($array, $products, 'id');

        //


        // $value = $request->session()->get('key');







        //

//    return $request->sesssion()->all();


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
