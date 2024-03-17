<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController;

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


Route::middleware('auth')->prefix('/admin')->group(function () {

    /*
      |  Users Routes 
    */
    Route::prefix('/users')->group(function () {
        Route::get('/',[UsersController::class, 'index'])->name('user.index');
        Route::get('/add',[UsersController::class, 'create'])->name('user.add');
        Route::post('/store',[UsersController::class, 'store'])->name('user.store');
        Route::get('/edit/{id}',[UsersController::class, 'edit'])->name('user.edit');
        Route::post('/update',[UsersController::class, 'update'])->name('user.update');
        Route::get('/delete/{id}',[UsersController::class, 'destroy'])->name('user.destroy');
    });
    
    /*
      |  Products Routes 
    */
    Route::prefix('/products')->group(function () {
        Route::get('/', function () {
           return view('products.index');
        })->name('product.index');

        Route::get('/add', function () {
           return view('products.add'); 
        })->name('product.add');
     });
    
     /*
      | Dashboard
     */
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});

        Route::get('/',[PagesController::class,'index'])->name('home');
        Route::get('/testimonial',[PagesController::class,'testimonial'])->name('testimonial');
        Route::get('/why',[PagesController::class,'why'])->name('why');
        Route::get('/about-us',[PagesController::class,'about'])->name('about');
        Route::get('/products',[PagesController::class,'products'])->name('products');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';