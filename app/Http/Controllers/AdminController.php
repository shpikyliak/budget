<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        return json_encode($_POST);
    }
}
