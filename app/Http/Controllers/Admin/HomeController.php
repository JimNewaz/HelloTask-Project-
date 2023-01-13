<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;


class HomeController extends Controller
{
    public function index() {

        $company = Company::count();
        $employee = Employee::count();
        
        return view('admin.dashboard', compact('company', 'employee'));
    }
}
