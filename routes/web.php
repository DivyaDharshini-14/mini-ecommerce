<?php

use App\Livewire\AdminDashboard;
use App\Livewire\ManageOrders;
use App\Livewire\ManageProduct;
use App\Livewire\ProductDetails;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', ProductDetails::class);

Route::get('/admin/dashboard', AdminDashboard::class)->name('dashboard')->middleware('admin');

Route::get('/manageProducts',ManageProduct::class)->name('manageProducts')->middleware('admin');

Route::get('/orders',ManageOrders::class)->name('orders')->middleware('admin');
