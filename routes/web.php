<?php
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
//resource coge todos los métodos del controlador y crea todas las rutas 

Route::resource('/teams', TeamController::class);
/*  las rutas individualmente serían así:
    Route::get('teams', [TeamController::class, 'index']);
    Route::post('teams/store', [TeamController::class, 'store']); ...  */
