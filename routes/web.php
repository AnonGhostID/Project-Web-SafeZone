<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Diary;


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

Route::get('menu', function () {
    return view('dashboard', [
        'karyawan' => Diary::latest()->get()
    ]);
})->name('menu');

Route::get('monitor', function () {
    return view('ConflictMonitor', [
        'karyawan' => Diary::latest()->get()
    ]);
})->name('monitor');


Route::get('Konseling', function () {
    return view('Konseling', [
        'karyawan' => Diary::latest()->get()
    ]);
})->name('Konseling');

Route::get('Report', function () {
    return view('Report', [
        'karyawan' => Diary::latest()->get()
    ]);
})->name('Report');

Route::get('diary', function () {
    return view('karyawan', [
        'karyawan' => Diary::latest()->get()
    ]);
})->name('diary');

Route::get('guestDashboard', function () {
    return view('guestDashboard');
})->name('guestDashboard');

Route::controller(KaryawanController::class)->prefix('karyawan')->group(function () {
    Route::get('', 'index')->name('dashboard');
    Route::get('insert', 'insert')->name('karyawan.insert');
    Route::post('insert', 'insert_action')->name('karyawan.insert.action');
    Route::get('edit/{id}', 'edit')->name('karyawan.edit');
    Route::post('edit/{id}', 'update')->name('karyawan.edit.update');
    Route::get('delete/{id}', 'delete')->name('karyawan.delete');
});

Auth::routes();

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('guestDashboard');
    }
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

