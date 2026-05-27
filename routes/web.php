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
