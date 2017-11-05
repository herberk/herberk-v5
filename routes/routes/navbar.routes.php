<?php

Route::view('/tablas', 'layouts.escritorios.escritorio_tablas');


Route::get('/usuario', function () {
    return view('layouts.escritorios.escritorio_user');
});

Route::get('/prueba', function () {
    return view('layouts.prueba');
});


Route::get('/escritorioblanco', function () {
    return view('layouts.escritorio2');
});
