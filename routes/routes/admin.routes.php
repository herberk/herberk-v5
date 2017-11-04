<?php

use App\User;
use Illuminate\Foundation\Http\Middleware\Authorize;


Route::get('login-as/{id}', function ($id) {
    auth()->loginUsingId($id);
    return Redirect::to('/');
});

Route::resource('users', 'UsersController', ['parameters' => [
    'users' => 'user'
]]);

Route::get('usersxls',['as' => 'usersxls', 'uses'=> 'UsersController@aexcel']);


Route::group(['middleware' =>'auth'], function(){
    route::get('profile', 'ProfileController@edit');
    route::put('profile', 'ProfileController@update');
    route::get('profile/avatar', 'ProfileController@avatar');
    route::get('profile/{user}', 'ProfileController@show');

 });