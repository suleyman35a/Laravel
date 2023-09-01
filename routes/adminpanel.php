<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware'=>'panelsetting', 'prefix'=>'adminpanel'], function() {

    Route::get('/admin',  [AdminController::class,'index'])->name('admin');

});

