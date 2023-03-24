<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\AuthController;





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
    return view('index');
});
Route::get('index',[indexcontroller::class,'index'])->name('index');
Route::get('about',[indexcontroller::class,'about'])->name('about');
Route::get('courses',[indexcontroller::class,'courses'])->name('courses');
Route::get('contact',[indexcontroller::class,'contact'])->name('contact');

Route::post('contact-store',[contactcontroller::class,'store'])->name('contact.store');
Route::get('contact_display',[ContactController::class,'index'])->name('contact.display');

Route::get('admin-registration',[AuthController::class,'registration'])->name('admin.register');
Route::post('admin_save',[AuthController::class,'registerUser'])->name('admin.save');

Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('admin_login',[AuthController::class,'loginUser'])->name('admin.login');
Route::get('forgotPassword',[AuthController::class,'forgotPassword'])->name('forgotPassword');
Route::post('ChangePassword',[AuthController::class,'ChangePassword'])->name('ChangePassword');
Route::get('dashbord',[AuthController::class,'dashboard'])->name('admin.dashbord');




