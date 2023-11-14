<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApotekerDashboard;

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

Route::group(['prefix' => '/'], function () {

    Voyager::routes();

    Route::group(['middleware' => ['admin.user']], function () {
        Route::get('/', [ApotekerDashboard::class, 'index'])->name('voyager.dashboard');
    });


});
