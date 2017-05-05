<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;


class AdminController extends Controller
{
    public function addUser()
    {

        $usersTypes = DB::table('users_types')->get();
        $departments = DB::table('departments')->get();
        return view('admin.addUser' , compact('usersTypes', 'departments'));
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
            'password'=>$password,
        );
           // dd($data);
        User::create(
            $data
        );

        flash('Успішно створено!')->success();
        return redirect('/budget');
    }
}
