<?php

use App\Http\Controllers\GiftController;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    [GiftController::class, 'unlockPage']
)->name('gift.unlock');

Route::post(
    '/unlock',
    [GiftController::class, 'unlock']
)->name('gift.unlock.submit');

Route::get(
    '/home',
    [GiftController::class, 'home']
)->name('gift.home');

Route::get(
    '/memories',
    [GiftController::class, 'memories']
)->name('gift.memories');

Route::get(
    '/quiz',
    [GiftController::class, 'quiz']
)->name('gift.quiz');

Route::post(
    '/quiz',
    [GiftController::class, 'submitQuiz']
)->name('gift.quiz.submit');

Route::get(
    '/quiz/thank-you',
    [GiftController::class, 'quizThankYou']
)->name('gift.quiz.thankyou');

Route::get(
    '/quiz-answers',
    [GiftController::class, 'quizAnswers']
)->name('gift.quiz.answers');

Route::get(
    '/reasons',
    [GiftController::class, 'reasons']
)->name('gift.reasons');

Route::get(
    '/distance',
    [GiftController::class, 'distance']
)->name('gift.distance');

Route::get(
    '/letter',
    [GiftController::class, 'letter']
)->name('gift.letter');

Route::post(
    '/lock',
    [GiftController::class, 'lock']
)->name('gift.lock');