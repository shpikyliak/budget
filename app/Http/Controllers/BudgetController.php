<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Budget;
use App\Department;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = Budget::all();

        return view('budget.index', compact('budgets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('budget.create', compact('departments'));
    }

    public function save()
    {
        echo json_encode($_POST);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        Article::create([
//                'name' => request('name'),
//                'description' => request('description'),
//                'quarter1' => request('quarter1'),
//                'quarter2' => request('quarter2'),
//                'quarter3' => request('quarter3'),
//                'quarter4' => request('quarter4'),
//                'type' => request('type'),
//                'budget' => $id,
//            ]
//        );
//
//        flash('Успішно додано')->success();
//        return redirect('/budget/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $budget = Budget::find($id);
        $articles = Article::all()->where('budget', $id);
        return view('budget.show', compact('budget', 'articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
