<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('administrador',['middleware' => 'auth','uses'=>'HomeController@index'] );

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['prefix'=>'administrador', 'namespace' => 'Admin'], function(){
    Route::resource('users', 'UsersController');
    //Route::resource('profile', 'UsersProfileController');
    Route::get('users/{users}/profile', ['as'=>'administrador.users.profile', 'uses'=>'UsersProfileController@profile']  );
    Route::get('users/{users}/profile/edit', ['as'=>'administrador.users.profile.edit', 'uses'=>'UsersProfileController@editProfile']  );
    Route::put('users/{users}/profile/update', ['as'=>'administrador.users.profile.update', 'uses'=>'UsersProfileController@updateProfile'] );
    Route::get('users/profile/photo/{users}', ['as'=>'administrador.users.profile.photo', 'uses'=>'UsersProfileController@getProfilePhoto']);
    //Route::post('users/{users}/profile/edit/update', ['as'=>'administrador.users.profile.update', 'UsersProfileController@update']);
    Route::get('user/{users}/profile/email', ['as'=>'administrador.users.profile.email', 'uses'=>'UsersProfileController@sendMail'] );

    Route::group(['prefix'=>'productos', 'namespace' => 'Product'], function() {
        Route::get('items',['as'=>'productos.listaproduct', 'uses'=>'ProductoController@index']);
        //::get('items/{item}',['as'=>'productos.productodet', 'uses'=>'ProductoController@item']);
    });
    Route::resource('contactanos', 'ContactanosController');
    /*Route::group(['prefix'=>'Contactanos', 'namespace' => 'Contactanos'], function() {
        Route::get('contactenos',['uses'=>'UsersProfileController@profile']);
    });*/
});

//Route::put('administrador.users.profile.update','UsersProfileController@update' );
Route::get('formulario', 'StorageController@index');

//Route::post('storage/create', ['as'=>'new', 'uses'=>'StorageController@save']);

Route::filter('roles', function($ruta,$peticion,$roles,$redirect){

    $roles = explode("-", $roles);
    if(!in_array(Auth::user()->role_id, $roles))
        return Redirect::to($redirect);

});
/*Route::get('productos','ProductosController@index');*/


