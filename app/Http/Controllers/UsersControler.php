<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersControler extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function company(){
        return view('user.company');
    }

    public function employee(){
        return view('user.employee');
    }
    
}
