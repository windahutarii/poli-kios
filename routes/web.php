<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\PemilikController;
use App\Http\Controllers\Admin\KiosController;

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

Route::get('/', [LandingController::class, 'index'])->name('landing');

Auth::routes();

Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/user/home', [HomeController::class, 'userHome'])->name('user.home');
// Route::get('/koleksi', [HomeController::class, 'userKoleksi'])->name('user.koleksi');
// Route::get('/detail/{$id}', [HomeController::class, 'userDetail'])->name('user.detail');

Route::resource('pemilik', PemilikController::class);
Route::resource('kios', KiosController::class);

// landing
Route::get('/koleksi', [LandingController::class, 'koleksi'])->name('user.koleksi');
Route::get('/detail/{id}', [LandingController::class, 'koleksiDetail'])->name('user.kios.detail');
