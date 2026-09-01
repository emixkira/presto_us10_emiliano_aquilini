<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])
    ->name('home');

Route::get(
    '/article/index',
    [ArticleController::class, 'index']
)->name('article.index');

Route::get(
    '/article/create',
    [ArticleController::class, 'create']
)->name('article.create');

Route::get(
    '/article/show/{article}',
    [ArticleController::class, 'show']
)->name('article.show');

Route::get(
    '/article/category/{category}',
    [ArticleController::class, 'byCategory']
)->name('article.byCategory');

Route::get(
    '/search/article',
    [PublicController::class, 'searchArticles']
)->name('article.search');

Route::get(
    '/revisor/index',
    [RevisorController::class, 'index']
)
    ->middleware('isRevisor')
    ->name('revisor.index');

Route::patch(
    '/revisor/accept/{article}',
    [RevisorController::class, 'accept']
)
    ->middleware('isRevisor')
    ->name('revisor.accept');

Route::patch(
    '/revisor/reject/{article}',
    [RevisorController::class, 'reject']
)
    ->middleware('isRevisor')
    ->name('revisor.reject');

Route::get(
    '/become/revisor',
    [RevisorController::class, 'becomeRevisor']
)
    ->middleware('auth')
    ->name('become.revisor');

Route::get(
    '/make/revisor/{user}',
    [RevisorController::class, 'makeRevisor']
)->name('make.revisor');