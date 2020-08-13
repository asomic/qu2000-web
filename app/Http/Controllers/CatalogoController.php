<?php

namespace App\Http\Controllers;


use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Session;
use Illuminate\Pagination\Paginator;



class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *///comentado
    public function index()
    {
        $products = Product::paginate(9);     
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

        $products = Product::where('category_id', (int)$id)->paginate(12);
        $categories = Category::all();
     
        return view('catalogo')->with([
            'products'=>$products,
            'categories'=>$categories
          

        ]);

    }


    


}