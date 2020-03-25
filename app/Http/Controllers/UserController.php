<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    // Crear una instancia  con request
    public function show(Request $request, $id)
    {


        $value = $request->session()->get('key');

        



        //
    }
}
