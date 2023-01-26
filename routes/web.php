<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about',fn()=> view('pages.about'))->name('about');

Route::view('pages.help','pages.help');