<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'DESC')->paginate(1);
        return ArticleResource::collection($articles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = $request->isMethod('put') ? Article::findOrFail($request->input('id')) : new Article;

        $article->id = $request->input('id');
        $article->title = $request->input('title');
        $article->content = $request->input('content');

        if ($article->save()) {
            return new ArticleResource($article);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return new ArticleResource($article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if ($article->delete()) {
            return new ArticleResource($article);
        }
    }
}
