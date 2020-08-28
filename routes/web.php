<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');


Route::get('catalogo', 'CatalogoController@index'); 
Route::get('catalogo/{id}', 'CatalogoController@shearch');

//solo esta ruta basta!
Route::get('item/{item}', 'ItemController@show');
Route::get('item/{id}/add', 'ItemController@add')->name('items.add');
Route::get('item/{id}/remove', 'ItemController@delete')->name('items.remove');
Route::get('item/{id}/update', 'ItemController@update')->name('items.update');
// Email
Route::post('/enviado', 'MailController@sendmail')->name('ruta');

Route::post('/enviadoM', 'MailControllerMayorista@sendmail')->name('rutam');

Route::post('/enviadoC', 'MailControllerCotizador@mail')->name('rutac');




Route::get('nosotros', function () {
    return view('nosotros');
})->name('nosotros');
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




