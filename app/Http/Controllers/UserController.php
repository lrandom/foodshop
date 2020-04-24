<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $list = User::paginate(5);
        return view('admin.users.main', ['list' => $list]);
    }

    public function add()
    {
    }


    public function edit()
    {
    }
}