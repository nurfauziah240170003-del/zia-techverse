<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

Route::get('/', function () {

    $articles = Article::where('status', 'published')
        ->latest()
        ->paginate(6);

    return view('home', compact('articles'));

});

Route::get('/artikel', function (Request $request) {

    $search = $request->search;

    $category = $request->category;

    $categories = Category::all();

    $articles = Article::where('status', 'published')

        ->when($search, function ($query) use ($search) {

            $query->where('title', 'like', '%' . $search . '%');

        })

        ->when($category, function ($query) use ($category) {

            $query->where('category_id', $category);

        })

        ->latest()

        ->paginate(9);

    return view('articles.public', compact(
        'articles',
        'search',
        'categories',
        'category'
    ));

})->name('artikel');

Route::get('/tentang-saya', function () {

    return view('about');

})->name('about');

Route::get('/artikel/{article}', function (Article $article) {

    return view('articles.show', compact('article'));

})->name('artikel.show');

Route::post('/artikel/{article}/komentar', [CommentController::class, 'store'])
    ->middleware('auth')
    ->name('comments.store');

Route::get('/dashboard', function () {

    $totalArticles = Article::count();

    $totalCategories = Category::count();

    $publishedArticles = Article::where('status', 'published')->count();

    $draftArticles = Article::where('status', 'draft')->count();

    return view('dashboard', compact(

        'totalArticles',
        'totalCategories',
        'publishedArticles',
        'draftArticles'

    ));

})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    Route::get('/profile-user', function () {

        return view('profile.user');

    })->name('profile.user');

    Route::resource('categories', CategoryController::class);

    Route::resource('articles', ArticleController::class);

});

require __DIR__.'/auth.php';