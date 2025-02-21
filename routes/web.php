<?php
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EatingController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members', [MemberController::class, 'index'])->name('members');
Route::get('/members/{id}', [MemberController::class, 'show'])->name('members.show');
Route::get('/members/{id}/update', [MemberController::class, 'update'])->name('members.update');

Route::put('/eatings/{id}', [EatingController::class, 'update'])->name('eatings.update');
