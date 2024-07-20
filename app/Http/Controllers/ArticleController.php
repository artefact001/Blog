<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'creation_date' => 'required|date',
            'featured' => 'boolean',
            'image' => 'nullable|image|max:2048'
        ]);

        $validatedData['featured'] = $request->has('featured') ? 1 : 0;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $path;
        }

        Article::create($validatedData);

        return redirect()->route('articles.index')->with('success', 'Article créé avec succès.');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'creation_date' => 'required|date',
            'featured' => 'boolean',
            'image' => 'nullable|image|max:2048'
        ]);

        $validatedData['featured'] = $request->has('featured') ? 1 : 0;

        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $path = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $path;
        }

        $article->update($validatedData);

        return redirect()->route('articles.index')->with('success', 'Article modifié avec succès.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    }
}
