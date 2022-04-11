<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all()->sortByDesc('created_at');

        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all());
        $article->user_id = $request->user()->id;

        $filename = $request->file('image')->store('public');
        $article->image = str_replace('public/', '', $filename);

        // $imageFile = $request->image;
        // if (!is_null($imageFile) && $imageFile->isValid()) {
        //     Storage::putFile('public/articles', $imageFile);
        //     $article->image = str_replace('public/articles', '', $imageFile);
        // }

        $article->save();

        return redirect()->route('articles.index');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }
}