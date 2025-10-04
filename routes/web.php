<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/welcome');
});

Route::get('/jobs', function () {

    return view('jobs', ['header_title' => 'Страница Вакансии']);
});

Route::get('/career', function () {

    return view('career', ['header_title' => 'Страница Карьера']);
});

Route::get('/salaries', function () {

    return view('salaries', ['header_title' => 'Страница Зарплаты']);
});

Route::get('/company', function () {

    return view('company', ['header_title' => 'Страница Компании']);
});
