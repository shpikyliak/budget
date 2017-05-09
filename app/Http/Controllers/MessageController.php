<?php

namespace App\Http\Controllers;

use App\Article;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($article_id)
    {
        $article = Article::find($article_id);
        return view('admin.newMessage', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $article_id)
    {

        Message::create([
            'message' => $request->message,
            'to_change'=> json_encode($request->all()),
            'type_id'=>1,
            'article_id'=>$article_id,
            'is_done'=>false,
            'from_department_id'=>Auth::user()->department_id,
            'to_department_id'=>Auth::user()->department->related_to,
            'version'=>1,
            'user_id'=>Auth::user()->id,
        ]);

        flash('Успішно!')->success();
        return redirect('/article/'.$article_id);

    }

    public function accept($id)
    {
        $message = Message::find($id);
        $quarters = json_decode($message->to_change);

        $article = $message->article;
        $article->quarter1 = $quarters->quarter1;
        $article->quarter2 = $quarters->quarter2;
        $article->quarter3 = $quarters->quarter3;
        $article->quarter4 = $quarters->quarter4;

        $article->user_id = Auth::user()->id;

        $article->save();

        $message->is_done = true;
        $message->save();

        flash('Успішно!')->success();
        return redirect('/admin/messages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
