<?php



Route::post('destroy/{id}',['as' => 'destroy',
    'uses' =>'TablasController@destroy'
]);

Route::post('storeciudad', ['as' => 'storeciudad',
    'uses' => 'TablasController@storeciudad']);


Route::get('listaloca', 'TablasController@index_reg_com');

Route::get('glosas', 'TablasController@glosas');


Route::post('storedesglosas',['as' => 'storedesglosas',
    'uses' =>'TablasController@storedesglosas'
]);

Route::get('modal', 'TablasController@index_modal');

