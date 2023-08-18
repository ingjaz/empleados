<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpleadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
    return "Bienvenido a la pagina princiapl";
});*/

Route::get('/', HomeController::class);

/*
//Acceso a empleados
Route::get('empleado', [EmpleadoController::class, 'index']);

//Creacion de empleados
Route::get('empleado/nuevo', [EmpleadoController::class, 'create']);

//Ver lista de empleados
Route::get('empleado/listado', [EmpleadoController::class, 'showList']);

//Ver detalle de empleado seleccionado
Route::get('empleado/detalle/{numempleado}', [EmpleadoController::class, 'show']);

//Editar empleado seleccionado
Route::get('empleado/edicion/{numempleado}', [EmpleadoController::class, 'edit']);

//Ver detalle de empleado seleccionado
Route::get('empleado/elimina/{numempleado}', [EmpleadoController::class, 'delete']);
*/

Route::controller(EmpleadoController::class)->group(function(){
    //Acceso a empleados
    Route::get('empleado', 'index')->name('empleado');

    //Creacion de empleados
    Route::get('empleado/nuevo', 'create')->name('empleado.create');
    Route::post('empleado', 'store')->name('empleado.store');

    //Ver lista de empleados
    Route::get('empleado/listado', 'showList')->name('empleado.listado');

    //Ver detalle de empleado seleccionado
    Route::get('empleado/{numempleado}/detalle', 'show')->name('empleado.detalle');

    //Editar empleado seleccionado
    Route::get('empleado/{numempleado}/edicion', 'edit')->name('empleado.edit');
    Route::put('empleado/{numempleado}', 'update')->name('empleado.update');

    //Ver detalle de empleado seleccionado
    Route::get('empleado/elimina/{numempleado}', 'delete')->name('empleado.delete');
});

