<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::view('/', 'projects.index')->name('projects.index');

Route::view('/project/{project}', 'projects.show')->name('projects.show');
    