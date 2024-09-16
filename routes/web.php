<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('about', 'about')->name('about');
Route::group(['prefix'=> 'features'],function(){
    Route::view('scalable-solution', 'features.scalable')->name('scalable');
    Route::view('modular-solution', 'services')->name('modular');
    Route::view('artificial-intelligence', 'services')->name('intelligence');
    Route::view('constant-monitoring', 'services')->name('monitoring');
    Route::view('less-footprint', 'services')->name('footprint');
    Route::view('fast-installation', 'services')->name('installation');
});
Route::group(['prefix'=> 'product','as'=> 'product.'],function(){
    Route::view('sigenstor', 'product.sigenstor')->name('sigenstor');
    Route::view('sigens-battery', 'services')->name('battery');
    Route::view('sigens-hybrid-inverter', 'services')->name('hybrid_inverter');
    Route::view('sigens-energy-controller', 'services')->name('energy_controller');
    Route::view('sigens-energy-gateway', 'services')->name('energy_gateway');
    Route::view('sigens-ev-dc-charging-module', 'services')->name('charging_module');
    Route::view('sigens-communication-module', 'services')->name('communication_module');
});
Route::view('contact', 'contact')->name('contact');

