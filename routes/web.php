<?php

use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\PlayerController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Models\User;
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

// Route::get('/', function (){
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomePromoteController::class, 'index'])->name('promotepage.home');

Route::get('/about', function (){ 
    return "หน้าเกี่ยวกับ";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/index',[HomeController::class, 'admin'])->name('admin');

//Users
Route::get('/admin/user/index',[UserController::class, 'index'])->name('user.index');
Route::get('/admin/user/edit/{id}',[UserController::class, 'edit'])->name('user.edit');
Route::post('/admin/user/update/{id}',[Usercontroller::class, 'update'])->name('user.update');
Route::get('/admin/user/delete/{id}',[Usercontroller::class, 'delete'])->name('user.delete');


//promotion
Route::get('/admin/promotion/index',[PromotionController::class, 'index'])->name('promotion.index');
Route::get('/admin/promotion/create',[PromotionController::class, 'create'])->name('promotion.create');
Route::post('/admin/promotion/insert',[PromotionController::class, 'insert'])->name('promotion.insert');
Route::get('admin/promotion/edit/{id}',[PromotionController::class, 'edit']);
Route::post('admin/promotion/update/{id}',[PromotionController::class, 'update']);
Route::get('admin/promotion/delete/{id}',[PromotionController::class, 'delete']);

//Player
Route::get('/admin/player/index',[PlayerController::class,'index'])->name('player.index');
Route::get('/admin/player/create',[PlayerController::class,'create'])->name('player.create');
Route::post('/admin/player/insert',[PlayerController::class, 'insert'])->name('player.insert');
Route::get('admin/player/edit/{id}',[PlayerController::class, 'edit']);
Route::post('admin/player/update/{id}',[PlayerController::class, 'update']);
Route::get('admin/player/delete/{id}',[PlayerController::class, 'delete']);

//Room
Route::get('/admin/room/index',[RoomController::class, 'index'])->name('room.index');
Route::get('/admin/room/create',[RoomController::class, 'create'])->name('room.create');
Route::post('/admin/room/insert',[RoomController::class, 'insert'])->name('room.insert');
Route::get('admin/room/edit/{id}',[RoomController::class, 'edit']);
Route::post('admin/room/update/{id}',[RoomController::class, 'update']);
Route::get('admin/room/delete/{id}',[RoomController::class, 'delete']);