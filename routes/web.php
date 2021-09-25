<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DashboardController,HomeController,PembeliController,SapiController,TransaksiController,PengeluaranController};

/*|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::resource('/sapi',SapiController::class);
    Route::get('/sapi/hapus/{id}',[SapiController::class,'delete']);
    Route::get('/sapi/export_excel',[SapiController::class,'export_excel'])->name('transaksi.export_excel');
    Route::get('/dashboard',[PembeliController::class,'dashboard']);
    Route::resource('/dashboard',DashboardController::class);
    Route::resource('/pembeli',PembeliController::class);
    Route::get('/pembeli/hapus/{id}',[PembeliController::class,'delete']);
    Route::resource('/pengeluaran',PengeluaranController::class);
    Route::get('/pengeluaran/hapus/{id}',[PengeluaranController::class,'destroy']);
    Route::resource('transaksi',TransaksiController::class);
    Route::get('/transaksi/hapus/{transaksi}',[TransaksiController::class,'delete']);
});