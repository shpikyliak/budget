<?php

namespace App\Http\Controllers;

use App\Article;
use App\Department;
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
            $id = Auth::user()->department_id;
        }

        $password = str_random(8);
        $passwordHash = Hash::make($password);

        $data = array(
            'name' => request('name'),
            'email' => request('email'),
            'department_id' => (int)$id,
            'type_id' => request('type'),
            'password' => $passwordHash,
        );

        User::create($data);

        flash('Успішно створено! Пароль: ' . $password)->success();
        return redirect('/budget');
    }

    public function office()
    {
        $department = Department::find(Auth::user()->department_id);
        $newMessages = $department->newMessages()->count();
        return view('admin.office', compact('newMessages'));
    }

    public function messages()
    {
        $department = Department::find(Auth::user()->department_id);
        $messages = $department->newMessages();


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


        $message = Message::find((int)$id);

        $quartes = array(
            'quarter1' => $request->quarter1,
            'quarter2' => $request->quarter2,
            'quarter3' => $request->quarter3,
            'quarter4' => $request->quarter4,
        );
        $type = 1;

        if ($message->type_id == 1) {
            $type = 2;
        }
        Message::create(
            array(
                'to_change' => json_encode($quartes),
                'message' => $request->message,
                'from_department_id' => Auth::user()->department_id,
                'to_department_id' => $message->from_department_id,
                'article_id' => $message->article_id,
                'is_done' => false,
                'version' => $message->version + 1,
                'user_id' => Auth::user()->id,
                'type_id' => $type
            )
        );

        $message->is_done = true;
        $message->save();

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
