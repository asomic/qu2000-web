<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

<<<<<<< HEAD
Route::get('catalogo', 'CatalogoController@index');
Route::get('catalogo/{id}', 'CatalogoController@shearch');

//solo esta ruta basta!
Route::get('item/{id}', 'ItemController@detalle');
Route::get('item/{id}/add', 'ItemController@add')->name('items.add');
// Route::get('item/{id}/addq', 'ItemController@addq')->name('items.addq');
Route::get('item/{id}/remove', 'ItemController@delete')->name('items.remove');
Route::get('item/{id}/update', 'ItemController@update')->name('items.update');
=======
///como funciona esto !!!! la misma ruta diferente controladores ??? como sabe a cual ir?
Route::get('item/{id}', 'ItemController@verDetalle');
Route::get('item/{id}', 'HomeController@verDetalle');
Route::get('item/{id}', 'CatalogoController@verDetalle');



Route::get('catalogo', 'CatalogoController@index');
Route::get('catalogo/{id}', 'CatalogoController@shearch');




/// hacen lo mismo todas estas rutas !!
Route::get('obtenerProductocatalogo/{id}', 'CatalogoController@agregarCarrito');
Route::get('obtenerProductoindex/{id}','HomeController@agregarCarrito');
Route::get('obtenerProductoitem/{id}','ItemController@agregarCarrito');

//solo esta ruta basta!
Route::get('item/{id}/add', 'ItemController@add')->name('items.add');
Route::get('item/{id}/remove', 'ItemController@delete')->name('items.remove');
Route::get('item/{id}/update', 'ItemController@update')->name('items.update');



Route::get('deleteObjeto/{id}','CotizadorController@deleteObjeto');

>>>>>>> 780fe83afad6ad268b16128e91419edcdd2af85a



// Email
Route::post('/enviado', 'MailController@mailContacto')->name('ruta');

Route::post('/enviadoM', 'MailController@mailMayorista')->name('rutam');

Route::post('/enviadoC', 'MailController@mailCotizador')->name('rutac');


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




