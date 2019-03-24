<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Resources\ArticleResource;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = ArticleResource::collection(Article::paginate(2));
        return $articles;//response()->json($articles);
    }

    public function store(ArticleRequest $request)
    {
        Article::create(['title'=>$request->title,'slug'=>str_slug($request->title),'body'=>$request->body]);
    }

    public function show(Article $article)
    {
        $article = new ArticleResource($article);
        return $article;
    }

    public function update(Request $request, Article $article)
    {
        $article->update([
            'title'=>$request->title,
            'slug'=>str_slug($request->title),
            'body'=>$request->body
        ]);
    }

    public function destroy(Article $article)
    {
        $article->delete();
    }
}
