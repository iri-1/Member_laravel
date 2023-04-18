<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [MemberController::class,'index']) ->name('members.index');

Route::get('/members/create', [MemberController::class,'create']) ->name('members.create');

Route::post('/members/store', [MemberController::class,'store']) ->name('members.store');

Route::get('/members/{member}/edit', [MemberController::class,'edit']) ->name('members.edit');

Route::patch('/members/{member}/update', [MemberController::class,'update']) ->name('members.update');

Route::delete('/members/{member}/destroy', [MemberController::class,'destroy']) ->name('members.destroy');
