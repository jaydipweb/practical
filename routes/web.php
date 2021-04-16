<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('auth/login');
})->name('loginpage');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/product', function () {
    return view('addproduct');
});
Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');
Route::post('addproduct', [ProductController::class, 'create']);
Route::post('edit/editproduct/{id}', [ProductController::class, 'update'])->name('editData');
Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('delete');
Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
