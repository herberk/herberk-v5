<?php




Route::get('giros',['as' => 'giros',
    'uses' => 'TablasController@giros'
]);
Route::get('girosxls', 'TablasController@bexcel');
