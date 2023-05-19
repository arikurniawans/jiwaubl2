<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
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
    return view('datahome.index');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', function () {
        return 'admin page';
    });
});

\AdvancedRoute::controllers([
    'dashboard' => DashboardController::class,
    'datamasterproduk' => MProdukController::class,
    'datauser' => UserController::class,
    'auth' => AuthController::class
]);

Route::post('loginaksi', [AuthController::class, 'loginaksi'])->name('loginaksi');
Route::get('logoutaksi', [AuthController::class, 'logoutaksi'])->name('logoutaksi')->middleware('auth');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/loginpage', [AuthController::class, 'loginpage'])->name('loginpage');

// //Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'getIndex'])->name('dashboard')->middleware('auth');

//Route Setup Values
Route::get('/masterproduk', [MProdukController::class, 'getIndex'])->name('masterproduk')->middleware('auth');
Route::get('/masterproduk/create', [MProdukController::class, 'getCreate'])->name('create')->middleware('auth');
Route::post('/masterproduk/store', [MProdukController::class, 'store'])->name('masterproduk/store')->middleware('auth');
Route::get('/masterproduk/edit/{id}', [MProdukController::class, 'getEdit'])->middleware('auth');
Route::get('/masterproduk/detail/{id}', [MProdukController::class, 'getShow'])->middleware('auth');


Route::get('/masterjasa', [MJasaController::class, 'getIndex'])->name('masterjasa')->middleware('auth');
Route::get('/masterjasa/create', [MJasaController::class, 'getCreate'])->name('create')->middleware('auth');
Route::post('/masterjasa/store', [MJasaController::class, 'store'])->name('masterjasa/store')->middleware('auth');
// Route::get('/masterjasa/detail/{id}', [MJasaController::class, 'getShow'])->middleware('auth');