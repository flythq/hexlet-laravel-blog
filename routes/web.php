<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('about', [PageController::class, 'about'])->name('about');

// Название сущности в URL во множественном числе, контроллер в единственном
Route::get('articles', [ArticleController::class, 'index'])
->name('articles.index'); // имя маршрута, нужно для того, чтобы не создавать ссылки руками

Route::get('articles/create', [ArticleController::class, 'create'])
->name('articles.create');

Route::post('articles', [ArticleController::class, 'store'])
->name('articles.store');

Route::get('articles/{article}', [ArticleController::class, 'show'])
->name('articles.show');

Route::get('articles/{article}/edit', [ArticleController::class, 'edit'])
->name('articles.edit');


Route::patch('articles/{article}', [ArticleController::class, 'update'])
->name('articles.update');

Route::delete('articles/{article}', [ArticleController::class, 'destroy'])
->name('articles.destroy');
