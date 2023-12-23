<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect'])->name('redirect');

route::get('/',[HomeController::class,'index'])->name('index');

route::get('/product',[AdminController::class,'product'])->name('product');
Route::post('/uploadproduct',[AdminController::class,'uploadproduct'])->name('uploadproduct');

route::get('/showproduct',[AdminController::class,'showproduct'])->name('showproduct');
route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct'])->name('deleteproduct');
route::get('/updateview/{id}',[AdminController::class,'updateview'])->name('updateview');
route::post('/updateproduct/{id}',[AdminController::class,'updateproduct'])->name('updateproduct');


route::get('/search',[HomeController::class,'search'])->name('search');

route::post('/addcart/{id}',[HomeController::class,'addcart'])->name('addcart');

route::get('/showcart',[HomeController::class,'showcart'])->name('showcart');
route::get('/delete/{id}',[HomeController::class,'delete'])->name('delete');

route::post('/showcart',[HomeController::class,'confirmorder'])->name('order');




