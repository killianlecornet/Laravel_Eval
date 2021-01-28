<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
    
        return view('Users/index', [
            'users' => $users
        ]);
    
    }

    public function show(int $id) {
        $user = User::all()->where('id' , $id)->first();
        return view('Users/show' , ['user' => $user]);
    }

}
