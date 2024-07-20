<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;





// Ressource pour les articles
Route::resource('articles', ArticleController::class);

// Route spécifique pour l'index des articles
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
