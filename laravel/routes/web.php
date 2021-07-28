<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalisaController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\Controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//Route::get('/', [AnalisaController::class, 'index'])->name('analisa');
Route::get('/', [Controller::class, 'index'])->name('error');

Route::prefix('mutasi')->group( function (){
    Route::get('', [MutasiController::class, 'index'])->name('mutasi');
    Route::get('/show/{id}', [MutasiController::class, 'show'])->name('mutasi.show');
    Route::get('/getlastid', [MutasiController::class, 'getlastid'])->name('mutasi.getlastid');
    Route::post('/store', [MutasiController::class, 'store'])->name('mutasi.store');
    Route::get('/download/{id}', [MutasiController::class, 'generateDoc'])->name('mutasi.download');
    Route::get('/master', [MutasiController::class, 'indexMaster'])->name('mutasi.master');
    Route::get('/master/cetak', [MutasiController::class, 'cetakmutasi'])->name('mutasi.master.cetakmutasi');
    Route::get('/master/tambah/getmasterdokument/{id?}', [MutasiController::class, 'getMasterDokument'])->name('mutasi.getmasterdokument');
    Route::get('/master/tambah/getjsonmaster/{id}', [MutasiController::class, 'getjsonmaster'])->name('mutasi.getjsonmaster');
    Route::get('/master/cetak/getjsondocsk/{jabatan}/{jobdesc}', [MutasiController::class, 'getjsondocsk'])->name('mutasi.getjsondocsk');
    Route::get('/master/tambah', [MutasiController::class, 'tambah'])->name('mutasi.master.tambah');
    Route::get('master/edit/{id}', [MutasiController::class, 'editFile'])->name('mutasi.master.editfile');
    Route::post('/master/update', [MutasiController::class, 'updateFile'])->name('mutasi.master.updatefile');
    Route::get('/parameter', [MutasiController::class, 'parameter'])->name('mutasi.master.parameter');
    Route::post('/parameter/store', [MutasiController::class, 'storeParameter'])->name('mutasi.parameter.store');
    Route::post('parameter/storeparameter', [MutasiController::class, 'storeParameterSK'])->name('mutasi.parameter.store.update');
    Route::post('/master/cetak/dowload', [MutasiController::class, 'cetakDokumentSK'])->name('mutasi.parameter.cetakDokumentSK');
    Route::get('master/download/{id}', [MutasiController::class, 'downloadMasterDokument'])->name('mutasi.master.downloadmasterdokument');
    Route::post('parameter/hapus', [MutasiController::class, 'hapusParameter'])->name('mutasi.master.parameter.hapusparameter');
    Route::get('parameter/show/{id}', [MutasiController::class, 'showParameter'])->name('mutasi.master.parameter.showparameter');
    Route::get('master/cekdokumentsk/{jabatan}/{satgas}', [MutasiController::class, 'cekdokumentsk'])->name('mutasi.master.cekdokumentsk');
    Route::get('getpegawailama/{id?}', [MutasiController::class, 'getpegawailama'])->name('mutasi.getpegawailama');
    
});