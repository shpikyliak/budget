<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Message;


class AdminController extends Controller
{
    public function addUser()
    {

        $usersTypes = DB::table('users_types')->get();
        $departments = DB::table('departments')->get();
        return view('admin.addUser', compact('usersTypes', 'departments'));
    }

    public function saveUser()
    {


        $id = request('department');
        if (empty($id)) {
            $id = Auth::user()->department;
        }

        $password = Hash::make(str_random(8));

        $data = array(
            'name' => request('name'),
            'email' => request('email'),
            'department' => (int)$id,
            'type' => request('type'),
            'password' => $password,
        );
        // dd($data);
        User::create(
            $data
        );

        flash('Успішно створено!')->success();
        return redirect('/budget');
    }

    public function office()
    {
        return view('admin.office');
    }

    public function messages()
    {
        $messages = Message::all();


        return view('admin.messages', compact('messages'));
    }

    public function showMessage($id)
    {
        $message = Message::find($id);


        $to_change = json_decode($message->to_change);
        return view('admin.showMessage', compact('message', 'to_change'));
    }

    public function sendAnswer(Request $request, $id)
    {


        $message = Message::find($id);

        $quartes = array(
            'quarter1' => $request->quarter1,
            'quarter2' => $request->quarter2,
            'quarter3' => $request->quarter3,
            'quarter4' => $request->quarter4,
        );

        $data = array(
            'to_change' => json_encode($quartes),
            'message' => $request->message,
            'from_department' => Auth::user()->department,
            'to_department' => $message->from_department,
            'article' => $message->article,
            'is_done' => false,
            'version' => $message->version + 1,
        );

        //$message->

        Message::create(
            $data
        );

        flash('Успішно!')->success();
        return redirect('/admin/messages');
    }

    public function history($article)
    {

       // $messages = Message::where('article', $article)->get();
        $a = array(
            'quarter1' => 1000,
            'quarter2' => 1100,
            'quarter3' => 1200,
            'quarter4' => 1300,
        );
        dd(json_encode($a));
        return view('admin.history', compact('messages', 'article'));
    }
}
