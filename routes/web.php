<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminTableController;
use App\Http\Controllers\AdminChartController;
use App\Http\Controllers\AdminEcommerceController;

Route::get('/', [HomeController::class,'index'])->name('Home');
Route::get('/movies', [MovieController::class,'index'])->name('Movies');
Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('AdminDashboard');
Route::get('/admin-table', [AdminController::class, 'index'])->name('AdminTable');
Route::get('/admin-chart', [AdminChartController::class, 'index'])->name('AdminChart');
Route::get('/admin-ecommerce', [AdminEcommerceController::class, 'index'])->name('AdminEcommerce');