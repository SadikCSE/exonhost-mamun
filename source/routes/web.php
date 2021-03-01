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
    return view('frontend.home');
});

Route::get('web-hosting',[\App\Http\Controllers\WebHostingController::class, 'webInfo']);
Route::get('reseller-hosting',[\App\Http\Controllers\ResellerHostingController ::class, 'resellerInfo']);
Route::get('ssd-vps',[\App\Http\Controllers\SsdVpsController ::class, 'ssdInfo']);
Route::get('dedicated-server',[\App\Http\Controllers\DedicatedServerController ::class, 'dedicatedInfo']);
Route::get('about',[\App\Http\Controllers\AboutController ::class, 'aboutInfo']);
Route::get('contact',[\App\Http\Controllers\ContactController ::class, 'contactInfo']);
Route::get('datacenter',[\App\Http\Controllers\DatacenterController ::class, 'datacenterInfo']);
Route::get('tos',[\App\Http\Controllers\TosController ::class, 'tosInfo']);
Route::get('privacy',[\App\Http\Controllers\PrivacyController ::class, 'privacyInfo']);




