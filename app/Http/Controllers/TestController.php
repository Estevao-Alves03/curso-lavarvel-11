<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index (){
        $users = User::paginate(20);//User::all();
        return view('teste.users.index', compact('users'));
    }
}
