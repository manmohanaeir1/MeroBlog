<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Models\About;

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
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// admin all routes logout 
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout',  'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'profile')->name('admin.profile');
    Route::get('/edit/profile', 'editProfile')->name('edit.profile');
    Route::post('/store/profile', 'storeProfile')->name('store.profile');
});

// home slider routes
Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/home/slider', 'index')->name('home.slider');
    Route::get('/create/slider', 'create')->name('create.slider');
    Route::post('/store/slider', 'store')->name('store.slider');
    Route::get('/edit/slider/{id}', 'edit')->name('edit.slider');
    Route::post('/update/slider', 'update')->name('update.slider');

  
   
});

//  about routes
Route::controller(AboutController::class)->group(function () {
    Route::get('/page/about', 'index')->name('index.about');
    Route::get('/page/create/about', 'create')->name('create.about');
    Route::post('/page/store/about', 'store')->name('store.about');
  
   
});








require __DIR__.'/auth.php';
    