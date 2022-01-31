<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($name=null)
    {
        $users = User::all();
        return view('hello',[
            "name"=>$name,
            "users" =>$users
        ]);
    }
}
