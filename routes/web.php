<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;


// Routes for Cimmino Michele Pages//

Route::get('/', [HomeController::class, 'Home'])->name('home');

Route::get('/about', function () {
    return view('/cimmino/about');
})->name('about');

Route::get('/project', function () {
    return view('/cimmino/page');
})->name('project');

Route::get('/form', function () {
    return view('/cimmino/form');
})->name('form');

Route::get('/interior', function () {
    return view('/cimmino/interior');
})->name('interior');



// Routes for FormController

Route::get('/mail', [formController::class, 'thank'])->name('thank');
Route::post('/form', [formController::class, 'send'])->name('send');


// Routes for Flow //

Route::get('/flow', [HomeController::class, 'Flow'])->name('flow');


// Routes for Travel //

Route::get('/travel' , [HomeController::class, 'Travel'])->name('travel');
Route::get('/travel/pricing' , [HomeController::class, 'Pricing'])->name('pricing');

// Routes for Art //

Route::get('/art' , [HomeController::class, 'Art'])->name('art');