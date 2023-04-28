<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VulnerabilityController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers'], function(){
    Route::get('/file', function(){
        return view('parsing.index');
    });
    Route::post('/file', [VulnerabilityController::class, 'processing'])
        ->name('file.parser.processing');
    Route::post('/file/download', [VulnerabilityController::class, 'download'])
        ->name('file.parser.download');
});

