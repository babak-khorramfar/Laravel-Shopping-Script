<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allUsers() {
        $users = User::all();
        return view('admin.users.all-users')->with('users', $users);
    }

    public function createUsers() {
        
        //
    }

    public function storeUser() {
        
        //
    }
 }
