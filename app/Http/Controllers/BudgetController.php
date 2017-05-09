<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $budgets = Auth::user()->department->allBudgets();
       // dd($budgets);
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


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = request('department');
        if (empty($id)) {
            $id = Auth::user()->department_id;
        }

        Budget::create([
                'name' => request('name'),
                'description' => request('description'),
                'department_id' => $id,
                'user_id' => Auth::user()->id,
            ]
        );

        flash('Успішно створено!')->success();
        return redirect('/budget');
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



        $articles = Article::all()->where('budget_id', (int)$id);

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
        $budget = Budget::find($id);
        $departments = Department::all();
        return view('budget.edit',compact('budget', 'departments'));
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

        $budget = Budget::find($id);

        $budget->name = $request->name;
        $budget->description = $request->description;
        $budget->department_id = $request->department;
        $budget->user_id = Auth::user()->id;

        $budget->save();

        flash('Успішно змінено!')->success();
        return redirect('/budget/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        Budget::destroy($id);

        flash('Успішно видалено!')->success();
        return redirect('/budget');
    }
}
