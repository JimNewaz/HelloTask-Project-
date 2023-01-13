<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $employee = Employee::latest()->get();
        $company = Company::latest()->get();
            
        return view('admin.employee', compact('employee', 'company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => ['required'],
        ]);

        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'company_id' => $request->company_id,
            'email' => $request->email,
            'phone' => $request->phone,            
        ];

        

        Employee::create($data);

        $message = [
            'message' => 'Employee has been added successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);

        $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
        ]);

        
            $data = [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,    
                'phone' => $request->phone,          
                'company_id' => $request->company_id, 
            ];   
            
            // dd($data);

        $employee->update($data);

        $message = [
            'message' => 'Employee has been updated successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($message);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);

        $employee->delete();

        $message = [
            'message' => 'Company has been removed successfully',
            'alert-type' => 'danger',
        ];

        return redirect()->back()->with($message);
    }

    
}
