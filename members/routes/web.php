<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

// 会員一覧画面
Route::get('/members' , [MemberController::class, 'index'])->name('members.index');

// 新規会員登録画面表示
Route::get('/members/create' , [MemberController::class, 'create'])->name('members.create');

// 新規会員登録処理
Route::post('/members' , [MemberController::class , 'store'])->name('members.store');

// 会員編集画面表示
Route::get('/members/{member}/edit' , [MemberController::class , 'edit'])->name('members.edit');

// 会員情報更新処理
Route::put('/members/{member}' , [MemberController::class , 'update'])->name('members.update');

// 会員削除処理
Route::delete('/members/{member}' , [MemberController::class , 'destroy'])->name('members.destroy');
