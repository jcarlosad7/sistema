<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/probarconexion',function(){
    try{
        DB::connection()->getPdo();
    } catch(\Exception $e){
        die("No se puede Conectar a la base de datos. Revise porfavor su configuración.
        Error: ".$e);
    }
});
*/
Auth::routes(['verify'=>'true']);
Route::group(['middleware'=>'verified'],function(){
    Route::resource('/entrada','EntradaController');
    Route::post('/entrada/comentario','EntradaController@comentarioGuardar')->name('comentario.guardar');
    Route::get('/home', 'HomeController@index')->name('home');
});
Route::get('/','BlogController@index')->name('blog.index');
Route::get('/blog/{id}','BlogController@show')->name('blog.show');



