<?php

use App\Http\Controllers\BbsController;
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


Route::get('/', [BbsController::class, 'index'])->name('index');
Route::get('/add-user', [BbsController::class , 'addUser'])->name('addUser');
Route::get('/add-post',[BbsController::class, 'addPost'])->name('addPost');
Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');

