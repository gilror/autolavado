<?php

use Illuminate\Support\Facades\Route;
use App\Models\Clientes;


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

 Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/cliente', [App\Http\Controllers\HomeController::class, 'rcliente'])->name('cliente');
// Route::resource('/clientes', App\Http\Controllers\Cliente::class, 'index');
Route::resource('/clientes', App\Http\Controllers\Cliente::class);
/* Route::resource('/trabajadores', [App\Http\Controllers\Trabajador::class, 'index']);
Route::resource('/vehiculos', [App\Http\Controllers\Vehiculo::class, 'index']);
Route::resource('/ventas', [App\Http\Controllers\Venta::class, 'index']);
Route::resource('/servicios', [App\Http\Controllers\Servicio::class, 'index']); */

/* Route::get('/clientes', function(){
    $cliente=Clientes::all();
    foreach($cliente as $clientes){
        echo "Nombre: ".$clientes->nombre."Apellidos"
        .$clientes->apaterno." "
        .$clientes->apaterno."Dirección"
        .$clientes->direccion."<br>";
    }
}); */

