<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('item/{id}', 'ItemController@verDetalle');
Route::get('item/{id}', 'HomeController@verDetalle');
Route::get('item/{id}', 'CatalogoController@verDetalle');

Route::get('catalogo', 'CatalogoController@index');

Route::get('catalogo/{id}', 'CatalogoController@shearch');





Route::get('obtenerProductocatalogo/{id}', 'CatalogoController@agregarCarrito');

Route::get('obtenerProductoindex/{id}','HomeController@agregarCarrito');

Route::get('obtenerProductoitem/{id}','ItemController@agregarCarrito');



Route::get('deleteObjeto/{id}','CatalogoController@agregarCarrito');




// Email
Route::post('/enviado', 'MailController@sendmail')->name('ruta');

Route::post('/enviadoM', 'MailControllerMayorista@sendmail')->name('rutam');

Route::post('/enviadoC', 'MailControllerCotizador@mail')->name('rutac');


// Route::get('/', function () {
//     return view('inicio');
// });



Route::get('nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('mayoristas', function () {
    return view('mayoristas');
})->name('mayoristas');

Route::get('sucursales', function () {
    return view('sucursales');
})->name('sucursales');

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('cotizador', function () {
    return view('cotizador');
})->name('cotizador');

Route::get('item', function () {
    return view('item');
})->name('item');


// El ayudante de sesión global
// Route::get('SessionCotizardor', function () {
//     // Recupera un dato de  la session en este caso una key
//     $value = session('key');



//     // Se le designa un valor por defecto...
//     $value = session('key', 'default');

//     // Guarda un dato en la sesion...
//     session(['key' => 'value']);

// });




