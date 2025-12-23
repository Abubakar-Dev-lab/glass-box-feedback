<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Middleware\CheckForSpam;
use Illuminate\Support\Facades\Route;

// show feedback form
Route::view('/', 'feedback')->name('feedback.form');
// handle feedback form submission
Route::post('/feedback-submit', [FeedbackController::class, 'store'])
    ->middleware(CheckForSpam::class)
    ->name('feedback.submit');
