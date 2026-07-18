<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $totalArticles = Article::count();

        $publishedArticles = Article::where('status', 'Published')->count();

        $draftArticles = Article::where('status', 'Draft')->count();

        $totalCategories = Category::count();

        $categoryData = Category::withCount('articles')->get();

        return view('dashboard', compact(
            'totalArticles',
            'publishedArticles',
            'draftArticles',
            'totalCategories',
            'categoryData'
        ));
    }
}