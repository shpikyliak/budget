<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('articles.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {

        Article::create([
                'name' => request('name'),
                'description' => request('description'),
                'quarter1' => request('quarter1'),
                'quarter2' => request('quarter2'),
                'quarter3' => request('quarter3'),
                'quarter4' => request('quarter4'),
                'type' => request('type'),
                'budget' => $id,
            ]
        );

        flash('Успішно додано')->success();
        return redirect('/budget/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);

        $articleTypes = DB::table('articles_types')->get();

        return view('articles.edit', compact('article', 'articleTypes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $article = Article::find($id);

        $article->name = $request->name;
        $article->description = $request->description;
        $article->type = $request->type;
        $article->quarter1 = $request->quarter1;
        $article->quarter2 = $request->quarter2;
        $article->quarter3 = $request->quarter3;
        $article->quarter4 = $request->quarter4;

        $article->save();

        flash('Успішно змінено!')->success();
        return redirect('/budget/'.$article->budget);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $article = Article::find($id);
        Article::destroy($id);

        flash('Успішно видалено!')->success();
        return redirect('/budget/'.$article->budget);
    }
}
