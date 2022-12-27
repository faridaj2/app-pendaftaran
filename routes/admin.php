<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\ProfileController;
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

Route::controller(admin::class)->middleware(['auth', 'verified', 'CheckRole:admin,superadmin'])->group(function () {
    Route::get('/admin', 'admin')->name('admin.index');
    Route::get('/all-student', 'all_student')->name('admin.all_student');
    Route::get('/std_register', 'register')->name('admin.register');
    Route::get('/not_register', 'not_register')->name('admin.not_register');
    Route::post('/edit_status', 'toggle_status')->name('toggle_status');
});
