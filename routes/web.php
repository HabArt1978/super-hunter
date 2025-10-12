<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);

Route::get('/jobs', function () {

    return view('jobs', ['header_title' => 'Страница Вакансии']);
});

Route::get('/career', function () {

    return view('career', ['header_title' => 'Страница Карьера']);
});

Route::get('/salaries', function () {

    return view('salaries', ['header_title' => 'Страница Зарплаты']);
});
