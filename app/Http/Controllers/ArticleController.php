<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Menampilkan daftar artikel + pencarian
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $articles = Article::with('category')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%');
            })
            ->latest()
            ->paginate(6);

        return view('articles.index', compact('articles', 'search'));
    }

    /**
     * Form tambah artikel
     */
    public function create()
    {
        $categories = Category::all();

        return view('articles.create', compact('categories'));
    }

    /**
     * Menyimpan artikel baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
            'content' => 'required',
            'status' => 'required|in:draft,published',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $thumbnail = null;

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request
                ->file('thumbnail')
                ->store('thumbnails', 'public');
        }

        Article::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'thumbnail' => $thumbnail,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('articles.index')
            ->with('success', 'Artikel berhasil ditambahkan.');
    }

    /**
     * Detail artikel
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Form edit artikel
     */
    public function edit(Article $article)
    {
        $categories = Category::all();

        return view('articles.edit', compact('article', 'categories'));
    }

    /**
     * Update artikel
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
            'content' => 'required',
            'status' => 'required|in:draft,published',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $thumbnail = $article->thumbnail;

        if ($request->hasFile('thumbnail')) {

            if (
                $article->thumbnail &&
                Storage::disk('public')->exists($article->thumbnail)
            ) {
                Storage::disk('public')->delete($article->thumbnail);
            }

            $thumbnail = $request
                ->file('thumbnail')
                ->store('thumbnails', 'public');
        }

        $article->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'thumbnail' => $thumbnail,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('articles.index')
            ->with('success', 'Artikel berhasil diubah.');
    }

    /**
     * Hapus artikel
     */
    public function destroy(Article $article)
    {
        if (
            $article->thumbnail &&
            Storage::disk('public')->exists($article->thumbnail)
        ) {
            Storage::disk('public')->delete($article->thumbnail);
        }

        $article->delete();

        return redirect()
            ->route('articles.index')
            ->with('success', 'Artikel berhasil dihapus.');
    }
}