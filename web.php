<?php

use Illuminate\Support\Facades\Route;

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

Route::get('user/{User}', function(App\Models\User $user){
    dd($user);
    return $user;
});
/*Route::prefix('user') -> group(function(){
    Route::get('/edit', function(){
        return 'edit';
    });
    Route::get('/{$id}', function(){
        return 'Mostrar detalhes';
    });
    Route::get('/tag', function(){
        return 'Tag do usuário';
    });
});
*/

/*Route::get('/user/{string?}', function ($string = null){
    return $string;
    //return view('welcome');
});*/
