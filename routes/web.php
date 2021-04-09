<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\formularioController;
use Illuminate\Support\Facades\Auth;
use App\Models\pedido;
use App\Http\Controllers\AdminController;

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

Route::get('/', [InicioController::class, 'index'])->name('inicio');

Auth::routes();

Route::get('/home',function(){
    if(Gate::allows('admin',Auth::user())){

        $pedidos = pedido::where("status","=",0)->get();
         return view ('/home', compact('pedidos'));
    }else
    {
        return view('/inicio');
    }
})->name('home')->middleware('auth');




Route::resource('pedidos', PedidosController::class)->middleware('auth');
Route::resource('formulario', formularioController::class);
Route::resource('admin', AdminController::class)->middleware('auth');
Route::get('/aprovada/{id}', 'App\Http\Controllers\PedidosController@aprovada')->name('pedidos.aprovada');
Route::get('/recusada/{id}', 'App\Http\Controllers\PedidosController@recusada')->name('pedidos.recusada');
Route::get('/pendente/{id}', 'App\Http\Controllers\PedidosController@pendente')->name('pedidos.pendente');
Route::get('irs', 'App\Http\Controllers\PedidosController@irs')->name('pedidos.irs');
Route::get('segurancasocial', 'App\Http\Controllers\PedidosController@segurancasocial')->name('pedidos.segurancasocial');
Route::get('irs–dmr', 'App\Http\Controllers\PedidosController@irs–dmr')->name('pedidos.irs–dmr');
Route::get('faturas', 'App\Http\Controllers\PedidosController@faturas')->name('pedidos.faturas');
Route::get('intrastat', 'App\Http\Controllers\PedidosController@intrastat')->name('pedidos.intrastat');
Route::get('modelo11', 'App\Http\Controllers\PedidosController@modelo11')->name('pedidos.modelo11');
Route::get('ces', 'App\Http\Controllers\PedidosController@ces')->name('pedidos.ces');
Route::get('iva', 'App\Http\Controllers\PedidosController@iva')->name('pedidos.iva');
Route::get('fct', 'App\Http\Controllers\PedidosController@fct')->name('pedidos.fct');
Route::get('cga', 'App\Http\Controllers\PedidosController@cga')->name('pedidos.cga');

