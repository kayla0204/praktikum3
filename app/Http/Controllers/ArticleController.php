<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Article List',
            'articles'=>Article::all()
        ];
        return view('admin.article.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            'title' => 'Creative Article'
        ];
        return view('admin.article.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|unique:articles|max:100',
            'description' => 'required',
            'slug' => 'required',
            'body' => 'required'
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->slug = $request->slug;
        $article->body = $request->body;
        $article->save();
        return redirect('list-article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [
            'title' => 'Edit Articles',
            'method'=> 'PUT',
            'article' => Article::find($id)
        ];
        return view('admin.article.edit', $data);
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $article= Article::find($id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->slug = $request->slug;
        $article->body = $request->body;
        $article->update();
        return redirect('list-article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Article::destroy($id);
        return redirect('/list-article');
    }
}
