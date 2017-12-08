<?php

use App\Tablas\Atributo;


Route::get('giros',['as' => 'giros',
    'uses' => 'TablasController@giros'
]);
Route::get('girosxls', 'TablasController@bexcel');

//Tipo_atributo
Route::get('/Tipo_atributo', function () {
    return view('tablas.master_tipos');
});
Route::get('/Tipo_Query','TipoatrController@tipos_Query')->name('Tipo_Query');
Route::get('/Atributo_Query','TipoatrController@atributo_Query')->name('Atributo_Query');
Route::get('/hayQuery','TipoatrController@hayatri')->name('hayQuery');

Route::post('/tipo/create', 'TipoatrController@tipocreate')->name('tipocreate');
Route::delete('/tipo/delete/{id}','TipoatrController@tipodelete')->name('tipodelete');
Route::put('/tipo/update','TipoatrController@tipoupdate')->name('tipoupdate');
Route::post('/atributo/create', 'TipoatrController@atributocreate')->name('atributocreate');
Route::delete('/atributo/delete/{id}','TipoatrController@atributodelete')->name('atributodelete');
Route::put('/atributo/update','TipoatrController@atributoupdate')->name('atributoupdate');


Route::get('/contar/{total}', function($total){
    $total= Atributo::where('tipos_id', $total)->count();
    return [
        'total' => $total
    ];
});

//Regiones Comunas
Route::get('locaciones', function () {
    return view('tablas.master_locaciones');
});
Route::get('/locacionesQuery','locacionesController@locaciones_Query')->name('locacionesQuery');
Route::get('/hayComunas','locacionesController@hayComunas')->name('hayComunas');

//Ciudades
Route::get('/ciudades', function () {
    return view('tablas.master_ciudades');
});
Route::get('/ciudadQuery','TablasController@ciudadQuery')->name('ciudadQuery');
Route::post('/ciudad/create','TablasController@create')->name('ciudadcreate');
Route::delete('/ciudad/delete/{id}','TablasController@delete')->name('ciudaddelete');
Route::put('/ciudad/update','TablasController@update')->name('ciudadupdate');
