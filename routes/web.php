<?php

use App\Http\Controllers\Admin\HomeDashController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ReservationController;
use GuzzleHttp\Middleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::post('/store', [HomeController::class, 'store'])->name('form.store');

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switchLang');

Route::group(['prefix' => 'admin', 'middleware' => 'guest'], function () {
    //auth
    Route::get('login', [LoginController::class, 'index'])->name('dashboard.login.index');
    Route::post('admin/login/submit', [LoginController::class, 'login'])->name('dashboard.login.form');
});


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [HomeDashController::class, 'index'])->name('dashboard.home');

    //logout
    Route::get('logout', [LoginController::class, 'logout'])->name('dashboard.logout');


    //profile
    Route::get('profile', [ProfileController::class, 'index'])->name('dashboard.profile.index');
    Route::post('profile/update', [ProfileController::class, 'update'])->name('dashboard.profile.update');
    Route::get('password', [ProfileController::class, 'password'])->name('dashboard.password.index');
    Route::post('password/change', [ProfileController::class, 'update_password'])->name('dashboard.password.update');

    //users
    Route::get('users', [UserController::class, 'index'])->name('dashboard.users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('dashboard.users.create');
    Route::post('users/store', [UserController::class, 'store'])->name('dashboard.users.store');
    Route::get('users/{obj}/edit', [UserController::class, 'edit'])->name('dashboard.users.edit');
    Route::post('users/{obj}/update', [UserController::class, 'update'])->name('dashboard.users.update');
    Route::delete('users/{obj}/delete', [UserController::class, 'destroy'])->name('dashboard.users.destroy');

    //settings
    Route::get('/settings', [SettingController::class, 'index'])->name('dashboard.settings.index');
    Route::post('/settings', [SettingController::class, 'update'])->name('dashboard.settings.update');

    //reservation
    Route::get('reservations', [ReservationController::class, 'index'])->name('dashboard.reservations.index');
    Route::get('reservations/create', [ReservationController::class, 'create'])->name('dashboard.reservations.create');
    Route::post('reservations/store', [ReservationController::class, 'store'])->name('dashboard.reservations.store');
    Route::get('reservations/{obj}/edit', [ReservationController::class, 'edit'])->name('dashboard.reservations.edit');
    Route::post('reservations/{obj}/update', [ReservationController::class, 'update'])->name('dashboard.reservations.update');
    Route::delete('reservations/{obj}/delete', [ReservationController::class, 'destroy'])->name('dashboard.reservations.destroy');
});
