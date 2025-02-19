<?php

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

Route::get('/members', function(){

    $members = ['田中一郎','鈴木一郎','高橋太郎','橋本幸三','佐々木一平','志村一樹','山田花子',];

    return view('members', compact('members'));
});
