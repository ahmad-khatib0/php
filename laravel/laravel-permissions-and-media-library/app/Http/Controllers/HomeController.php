<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name' => 'writer']);
        // $permission =  Permission::create(['name' => 'edit post']);
        // $permission = Permission::findById(1);
        // $role = Role::findById(1);
        // $permission->removeRole($role);
        // $role->givePermissionTo($permission);
        // $role->revokePermissionTo($permission);
        // auth()->user()->givePermissionTo('writer');
        // auth()->user()->assignRole('writer');

        // return auth()->user()->getDirectPermissions();
        return User::role('writer')->get();
        return User::permission('write post')->get();
        return view('home');
    }
}
