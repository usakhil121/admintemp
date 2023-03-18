<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController; 
use App\Http\Controllers\Admin\AdminProfilecontroller;

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
/* adminnn */

Route::get('/admin/home',[AdminHomeController::class,'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin/edit-profile',[AdminProfilecontroller::class,'index'])->name('admin_profile')->middleware('admin:admin');
Route::get('/admin/pages',[AdminPageController::class,'index'])->name('admin_pages')->middleware('admin:admin');
Route::get('/admin/login',[AdminLoginController::class,'index'])->name('admin_login');
Route::get('/admin/logout',[AdminLoginController::class,'logout'])->name('admin_logout');
Route::get('/admin/forgetpassword',[AdminLoginController::class,'forgetpw'])->name('forgetpw');
/* login sign in */
Route::post('/admin/login-submit',[AdminLoginController::class,'login_submit'])->name('admin_login_submit');

/*forget_password_submit */
Route::post('/admin/forget-password-submit',[AdminLoginController::class,'forget_password_submit'])->name('admin_forget_password_submit');

/*admin reset password*/
Route::get('/admin/reset-password/{token}/{email}',[AdminLoginController::class,'reset_password'])->name('admin_reset_password');

/*reset_password_submit */
Route::post('/admin/reset-password-submit',[AdminLoginController::class,'reset_password_submit'])->name('admin_reset_password_submit');  

Route::post('/admin/edit-profile-submit',[AdminProfilecontroller::class,'profile_submit'])->name('admin_profile_submit');