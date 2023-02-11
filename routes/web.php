<?php
use App\Http\Controllers\DataController;
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

Route::get('/edit-data/{id}', [DataController::class, 'edit'])->name('edit');

Route::patch('/update-data/{id}', [DataController::class, 'update'])->name('update');

Route::delete('/delete-data/{id}', [DataController::class, 'delete'])->name('delete');


//TODO kirim data category ke tampilan FE
Route::get('/create-data', [DataController::class, 'createData']);

//TODO Implementasi fungsi storeBook
Route::post('/store-data', [DataController::class, 'storeData']);

//TODO Tampilin category pada view dengan relationships
Route::get('/', [DataController::class, 'show']);
