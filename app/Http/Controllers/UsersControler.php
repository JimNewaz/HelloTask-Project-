<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;

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

    public function profile(){       

        $users = User::whereDay('created_at', now()->day)->get('email');
        
        return view('user.profile');
    }

    public function update(User $user, Request $request)
    {   
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => now()
        ]);

        // return $this->with('profile','Profile updated successfully!');
        $message = [
            'message' => 'Profile updated successfully!',
            'alert-type' => 'success',
        ];

        return redirect('profile');

    }
    
}
