<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;


class UsersControler extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function company(){
        $company = Company::latest()->paginate(10);
        return view('user.company', compact('company'));
    }

    public function employee(){        
        $employee = Employee::latest()->paginate(10);;
        
        return view('user.employee', compact('employee'));
    }
    
}
