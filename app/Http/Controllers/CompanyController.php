<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::all()->first();
        return view('admin.company-settings', compact('company'));
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
            'company_name' => 'required'
        ]);

        $image = $request->company_logo;

        try {

          DB::beginTransaction();

          // set logo paths
          $image_path = env('UPLOAD_PATH');
          $image_dir = public_path() . '/' . $image_path;


          // make the directory
          if (!file_exists($image_dir)) {
              File::makeDirectory($image_dir, 0755, true);
          }

          // set logo name and save logo to directory
          $image_name = Str::slug(strtolower(env('COMPANY_NAME'))) . '-logo' . '.'.$image->getClientOriginalExtension();
          $image->move($image_dir, $image_name);

          // save company details to database
          $company_details = [
            'name' => $request->company_name,
            'phone' => $request->company_phone,
            'email' => $request->company_email,
            'address' => $request->company_address,
            'logo' => $image_name,
          ];

          $company = Company::insert($company_details);

          DB::commit();

          return redirect()->back()->with('success', 'Company Details Added');

        } catch (\Exception $e) {
          DB::rollback();

          \Log::error($e->getMessage());
          return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
