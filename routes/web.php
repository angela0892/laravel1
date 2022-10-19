<?php

use Illuminate\Support\Facades\Route;
//Lamamos a todos los controladores que usaremos
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\Luis;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\PedidosController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', function () {
    return 'Aqui van los usuarios';
});

Route::get('/usuarios2', [UsuariosController::class, 'listar'] );

Route::get('/productos', [ProductoController::class, 'listar'] );

Route::get('/luis', [Luis::class, 'listar'] );
// Creando uan ruta para listar clientes
Route::get('/cliente', [CustomerController::class, 'listar'] );

//Route::get('/empleado', [::class, 'listar'] );

Route::get('/oficinas', [OficinaController::class, 'listar'] );

Route::get('/pedidos', [pedidosController::class, 'listar'] );

