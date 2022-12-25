<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'verified', 'CheckRole:user,admin,superadmin'])->group(function () {
    Route::get('/user', [user::class, 'index']);
    Route::get('/add-data', function () {
        return view('user.add-page');
    })->name('add-page');
    Route::post('/store-data', [user::class, 'store'])->name('store-data');
});
