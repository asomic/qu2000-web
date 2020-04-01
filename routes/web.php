<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('catalogo', 'CatalogoController@index');

Route::get('catalogo/{id}', 'CatalogoController@shearch');


Route::get('sessioncatalogo/{id}', 'CatalogoController@sessionOBjeto');


// Route::get('sessionhome/{id}', 'HomeController@sessionhome');




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




// Definicion y funcionalidades :
// se cargar con el framework, son las url de entradas de la aplicacion
// definir rut cuando entramos a  algun citio  www.misitio.com/contacto = 
// Route::get('contacto',function(){ 
// });
// Lo que escribamos dentro de la funcion es lo que vera el usuario. siempre y cuando al final
// le damos un return  
