<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');

Route::livewire('/about', 'pages::about')->name('about');

Route::livewire('/contact', 'pages::contact')->name('contact');

Route::livewire('/register/team', 'pages::register-team')->name('register-team');

Route::livewire('/register/tournament', 'pages::register-tournament')->name('register-tournament');
