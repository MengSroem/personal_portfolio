<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Main single-page home route
Route::get('/', [PortfolioController::class, 'home'])->name('home');

// All navigation links redirect to home with anchors (handled by JavaScript)
Route::get('/about', function () {
    return redirect('/#about');
})->name('about');

Route::get('/education', function () {
    return redirect('/#education');
})->name('education');

Route::get('/skills', function () {
    return redirect('/#skills');
})->name('skills');

Route::get('/projects', function () {
    return redirect('/#projects');
})->name('projects');

Route::get('/experience', function () {
    return redirect('/#experience');
})->name('experience');

Route::get('/contact', function () {
    return redirect('/#contact');
})->name('contact');

// Contact form submission
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');