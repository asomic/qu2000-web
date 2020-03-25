<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('catalogo', 'CatalogoController@index');

Route::get('catalogo/{category_id}', 'CatalogoController@shearch');


Route::get('sessioncatalogo/{id}', 'CatalogoController@array');

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

// Session
Route::get('SessionCotizardor', function () {
    // Recupera un dato de  la session en este caso una key
    $value = session('key');


    // Se le designa un valor por defecto...
    $value = session('key', 'default');

    // Guarda un dato en la sesion...
    session(['key' => 'value']);

});


