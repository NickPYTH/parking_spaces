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


Route::get('/', 'ShowFrames@FramesFill')->name('home');
Route::get('/sector_1', 'ShowFrames@SectorOneInfo')->name('sector_one_info');
Route::get('/sector_2', 'ShowFrames@SectorTwoInfo')->name('sector_two_info');
Route::get('/about', 'ShowFrames@About')->name('about');
Route::get('/ask', 'ShowFrames@Ask')->name('ask');