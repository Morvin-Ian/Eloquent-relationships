<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class UserController extends Controller
{

    public function index()
    {
        $users = User::with('roles')->get();

     
        return view('index', [
            "users"=>$users,
        ]);

    }

    public function users()
    {
        $users = User::with('roles')->get();

        return view('users', [
            "users"=>$users
        ]);

    }

    public function user(User $user)
    {
        $roles = $user->roles();

        return view('user', [

            'user'=>$user
        ]);
    }
}
