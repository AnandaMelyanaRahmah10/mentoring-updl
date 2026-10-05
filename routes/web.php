<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UpdlController;
use App\Http\Controllers\MasterDataController;
use App\Http\Controllers\KriteriaPenilaianController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ReportMentoringController;

Route::get('/dashboard/total-updl', function () {
    $total = DB::table('updl')->count();

    return response()->json([
        'total' => $total
    ]);
})->middleware('auth');


Route::get('/dashboard/total-kriteria', function () {
    $total = DB::table('kriteria_penilaian')->count();

    return response()->json([
        'total' => $total
    ]);
})->middleware('auth');

Route::get('/', function () {
    return redirect()->route('login');
});


/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', [
    AuthController::class,
    'showLogin'
])->name('login');


Route::post('/login', [
    AuthController::class,
    'login'
])->name('login.process');


/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {

        return view('dashboard');

    })->name('dashboard');


    Route::post('/logout', [
        AuthController::class,
        'logout'
    ])->name('logout');

});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/master/updl', UpdlController::class)
        ->names('master.updl');

});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/master-data', [MasterDataController::class, 'index'])
        ->name('master-data.index');

    Route::resource(
        '/master/kriteria',
        KriteriaPenilaianController::class
    )->names('master.kriteria');

            Route::resource(
        '/master/periode',
        PeriodeController::class
    )->names('master.periode');

   
});

Route::get('/dashboard/total-updl', function () {
    return response()->json([
        'total' => \App\Models\Updl::count()
    ]);


});
Route::middleware('auth')->group(function () {

    // REPORT MENTORING
    Route::get(
        '/report-mentoring',
        [ReportMentoringController::class, 'index']
    )->name('report-mentoring.index');


    // FORM INPUT REPORT
    Route::get(
        '/report-mentoring/form',
        [ReportMentoringController::class, 'form']
    )->name('report-mentoring.form');


    // SIMPAN REPORT + BUKTI
    Route::post(
        '/report-mentoring',
        [ReportMentoringController::class, 'store']
    )->name('report-mentoring.store');

});