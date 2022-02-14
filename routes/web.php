<?php

use Illuminate\Support\Facades\{
    Route,
    Auth
};
use App\Http\Controllers\{
    DashboardController,
    ProductController,
    UserController,
    CatController
};

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
    return redirect('login');
});

Route::middleware(['auth'])->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/productos', ProductController::class)->middleware('role:sistema1')->names('productos');
    Route::resource('/users', UserController::class)->middleware('role:sistema2')->names('usuarios');
    Route::resource('/gatos', CatController::class)->middleware('role:sistema3')->names('gatos');

});

require __DIR__.'/auth.php';
