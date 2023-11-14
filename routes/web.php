<?php

use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\Ticket\TicketController;
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

Route::group(['prefix'=>"admin"],function (){

    Route::get('dashboard',function(){
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::group(['prefix'=>"user"],function (){
       Route::get('/',[UserController::class,'index'])->name('admin.user.index');
       Route::get('/create',[UserController::class,'create'])->name('admin.user.create');
       Route::post('/',[UserController::class,'store'])->name('admin.user.store');
       Route::get('/{id}',[UserController::class,'show'])->name('admin.user.show');
       Route::delete('/{id}',[UserController::class,'destroy'])->name('admin.user.destroy');
       Route::get('/edit/{id}',[UserController::class,'edit'])->name('admin.user.edit');
       Route::put('/',[UserController::class,'update'])->name('admin.user.update');

    }) ;

    Route::group(['prefix'=>"post"],function (){
        Route::get('/',[PostController::class,'index'])->name('admin.post.index');
        Route::get('/create',[PostController::class,'create'])->name('admin.post.create');
        Route::post('/',[PostController::class,'store'])->name('admin.post.store');
        Route::get('/{id}',[PostController::class,'show'])->name('admin.post.show');
        Route::delete('/{id}',[PostController::class,'destroy'])->name('admin.post.destroy');
        Route::get('/edit/{id}',[PostController::class,'edit'])->name('admin.post.edit');
        Route::put('/{id}',[PostController::class,'update'])->name('admin.post.update');
    });

    Route::group(['prefix'=>'ticket'],function(){
        Route::get('/',[TicketController::class,'index'])->name('admin.ticket.index');
        Route::get('/create',[TicketController::class,'create'])->name('admin.ticket.create');
        Route::post('/',[TicketController::class,'store'])->name('admin.ticket.store');
        Route::get('/{id}',[TicketController::class,'show'])->name('admin.ticket.show');
        Route::delete('/{id}',[TicketController::class,'destroy'])->name('admin.ticket.destroy');
        Route::get('/edit/{id}',[TicketController::class,'edit'])->name('admin.ticket.edit');
        Route::put('/{id}',[TicketController::class,'update'])->name('admin.ticket.update');
    });

    Route::group(['prefix'=>'setting'],function(){
        Route::get('/',[SettingController::class,'index'])->name('admin.setting.index');
        Route::get('/create',[SettingController::class,'create'])->name('admin.setting.create');
        Route::post('/',[SettingController::class,'store'])->name('admin.setting.store');
        Route::get('/{id}',[SettingController::class,'show'])->name('admin.setting.show');
        Route::delete('/{id}',[SettingController::class,'destroy'])->name('admin.setting.destroy');
        Route::get('/edit/{id}',[SettingController::class,'edit'])->name('admin.setting.edit');
        Route::put('/{id}',[SettingController::class,'update'])->name('admin.setting.update');
    });
});
