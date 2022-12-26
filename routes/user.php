<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user;
use App\Models\student;
use Illuminate\Http\Request;
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
        $data = [
            'form' => 'store-data'
        ];
        return view('user.add-page', $data);
    })->name('add-page');
    Route::post('/store-data', [user::class, 'store'])->name('store-data');
    Route::get('/detail/{id}', [user::class, 'detail']);
    Route::post('/hapus', function (Request $request) {
        student::where('id', $request->id)->delete();
        return redirect()->back();
    })->name('hapus_siswa');
    Route::post('/edit', [user::class, 'edit_siswa'])->name('edit_siswa');
    Route::put('/store-data', [user::class, 'update_siswa'])->name('update_siswa');

});
