<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  // return view('admin.notifications.sweetalert');
  // return view('livewire.test');
  return view('welcome');
})->name('welcome');
Route::get('/test', function () {
  return view('test');
});

Route::get('liveTest', [DashboardController::class, 'test']);

Route::get('optimize', function () {
  Artisan::call('optimize:clear');
  return view('welcome');
});

Route::get("clear-cache", function () {
  Artisan::call('cache:clear');
  Artisan::call('route:clear');
  Artisan::call('config:clear');
  Artisan::call('view:clear');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
