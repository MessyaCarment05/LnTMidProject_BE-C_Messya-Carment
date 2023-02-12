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



Route::get('/create-data', [DataController::class, 'createData']);


Route::post('/store-data', [DataController::class, 'storeData']);


Route::get('/', [DataController::class, 'show']);
