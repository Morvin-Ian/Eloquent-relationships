<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    public function roles()
    {
        $roles = Role::all();


        return view('roles', [
            "roles"=>$roles
        ]);

    }


    public function role(Role $role)
    {

        return view('role', [
            'role'=>$role
        ]);
    }
}
