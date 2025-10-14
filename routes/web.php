<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/career', function () {
    return view('career', ['header_title' => 'Страница Карьера']);
});

Route::get('/salaries', function () {
    return view('salaries', ['header_title' => 'Страница Зарплаты']);
});

Route::get('/company', function () {
    return view('company', ['header_title' => 'Страница Компании']);
});

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{job}', [JobController::class, 'show']);
//Route::post('/jobs', [JobController::class, 'store']);



