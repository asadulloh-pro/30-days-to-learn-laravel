<?php


use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index')->name('Jobs list');
    Route::get('/jobs/create', 'create')->name('Job Create');
    Route::get('/jobs/{job}', 'show')->name(name: 'Show Job');
    Route::get('/jobs/{job}/update', 'update')->name('Jobs list');
    Route::post('/jobs', 'store')->name('Job store');
    Route::patch('/jobs/{job}', 'edit')->name('Job edit');
    Route::delete('/jobs/{job}', 'destroy')->name('Job delete');
});

