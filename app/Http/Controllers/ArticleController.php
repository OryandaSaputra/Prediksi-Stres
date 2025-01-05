<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('articles_index', compact('articles'));
    }

    public function create()
    {
        return view('articles_create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'content' => 'required|string',
        'published_at' => 'nullable|date',
    ]);

    // Isi `published_at` jika kosong dengan waktu saat ini
    $validated['published_at'] = $validated['published_at'] ?? Carbon::now('Asia/Jakarta');

    // Simpan artikel
    Article::create($validated);

    return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan!');
}

    public function show(Article $article)
    {
        return view('articles_show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles_edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'author' => 'required|string|max:100',
            'published_at' => 'nullable|date',
        ]);

        $article->update($request->all());

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus!');
    }
}
