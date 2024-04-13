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
/* resource coge todos los métodos del controlador y crea todas las rutas 
    automáticamente
Route::resource('/teams', TeamController::class);  */

    Route::get('teams', [TeamController::class, 'index'])->name('teams.index');
    Route::get('teams/create', [TeamController::class, 'create'])->name('teams.create');
    Route::post('teams/store', [TeamController::class, 'store'])->name('teams.store');
    Route::get('teams/{id}', [TeamController::class, 'show'])->name('teams.show');
    Route::get('teams/{id}/edit', [TeamController::class, 'edit'])->name('teams.edit');
    Route::put('teams/{id}', [TeamController::class, 'update'])->name('teams.update');
    Route::delete('teams/{id}', [TeamController::class, 'destroy'])->name('teams.delete');