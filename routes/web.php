<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirect', fn()=>view('welcome'))->middleware(['checkRole', 'auth']);

//admin
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin-dashboard')->middleware('admin');
Route::get('/admin/booked', 'App\Http\Controllers\AdminController@booked')->name('admin-booked')->middleware('admin');
Route::get('/admin/checkin', 'App\Http\Controllers\AdminController@checkin')->name('admin-checkin')->middleware('admin');
Route::get('/admin/checkout', 'App\Http\Controllers\AdminController@checkout')->name('admin-checkout')->middleware('admin');
Route::get('/admin/category', 'App\Http\Controllers\AdminController@category')->name('admin-category')->middleware('admin');
Route::get('/admin/room', 'App\Http\Controllers\AdminController@room')->name('admin-room')->middleware('admin');
Route::get('/admin/user', 'App\Http\Controllers\AdminController@user')->name('admin-user')->middleware('admin');

//customer
Route::get('/customer', 'App\Http\Controllers\CustomerController@index')->name('customer-dashboard')->middleware('customer');
Route::get('/customer/booking', 'App\Http\Controllers\CustomerController@booking')->name('customer-booking')->middleware('customer');
Route::get('/customer/profile', 'App\Http\Controllers\CustomerController@profile')->name('customer-profile')->middleware('customer');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
