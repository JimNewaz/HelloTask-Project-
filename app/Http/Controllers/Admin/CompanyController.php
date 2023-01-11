<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::latest()->get();
        return view('admin.company', compact('company'));
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
            'name' => 'required|unique:companies,name',
        ]);

        if($request->hasFile('company_logo')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png,jpg' // Only allow .jpg, .bmp and .png file types.
            ]);
            
            $request->file('company_logo')->store('companyLogo', 'public');
            
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $request->file('company_logo')->hashName(),
            'website' => $request->website,
        ];

        Company::create($data);

        $message = [
            'message' => 'Company has been added successfully',
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
        $company = Company::find($id);

        $request->validate([
            'name' => 'required|unique:companies,name,' . $company->$id . '|max:300',
        ]);

        if($request->hasFile('company_logo')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png,jpg' // Only allow .jpg, .bmp and .png file types.
            ]);
            
            $request->file('company_logo')->store('companyLogo', 'public');
            
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'logo' => $request->file('company_logo')->hashName(),
                'website' => $request->website,
            ];    
            
        }else{
            $data = [
                'name' => $request->name,
                'email' => $request->email,                
                'website' => $request->website,
            ];   
            
        }

        $company->update($data);

        $message = [
            'message' => 'Company has been updated successfully',
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
        $company = Company::find($id);

        $company->delete();

        $message = [
            'message' => 'Company has been removed successfully',
            'alert-type' => 'danger',
        ];

        return redirect()->back()->with($message);
    }
}
