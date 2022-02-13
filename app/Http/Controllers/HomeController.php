<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        // Role::create(['name'=>'writer']);
        // Permission::create(['name'=>'delete post']);
        // $role = Role::findById(1);
        // $permission = Permission::findById(3);
        // $role->givePermissionTo($permission);
        // $permission->removeRole($role);
        // auth()->user()->givePermissionTo('delete post');
        // auth()->user()->givePermissionTo('write post');
        // auth()->user()->assignRole('writer');
        return view('home');
    }
}
