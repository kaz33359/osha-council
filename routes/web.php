<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;

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

Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');

Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/enquiries', [AdminController::class, 'enquiries']);
    Route::get('admin/enquiry/delete/{id}',[AdminController::class,'delete_enquiry']);
    Route::post('admin/certificate/add_certificate_data_process',[AdminController::class,'add_certificate_data_process'])->name('certificate.add_certificate_data_process');
    Route::get('admin/certificate/delete/{id}',[AdminController::class,'delete_certificate_data_process']);
    Route::get('admin/logout', [AdminController::class, 'logout']);
});

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::post('/contact/submit',[PagesController::class,'contact_submit']);
Route::post('/certificate/validation',[PagesController::class,'certificate_validation']);
Route::get('/course', [PagesController::class, 'course']);
Route::get('/verification', [PagesController::class, 'verification']);
Route::get('/construction_and_safety', [PagesController::class, 'construction_and_safety']);
Route::get('/fire_and_safety', [PagesController::class, 'fire_and_safety']);
Route::get('/food_and_hygeine', [PagesController::class, 'food_and_hygeine']);
Route::get('/general_safety', [PagesController::class, 'general_safety']);
Route::get('/environment_safety', [PagesController::class, 'environment_safety']);
Route::get('/certificates/certificate_hand_environment', [PagesController::class, 'certificate_hand_environment']);
Route::get('/certificates/certificate_in_construction_industry', [PagesController::class, 'certificate_in_construction_industry']);
Route::get('/certificates/certificate_in_fire_safety', [PagesController::class, 'certificate_in_fire_safety']);
Route::get('/certificates/certificate_in_general_industry', [PagesController::class, 'certificate_in_general_industry']);
Route::get('/certificates/certificate_in_oil_and_gas', [PagesController::class, 'certificate_in_oil_and_gas']);
