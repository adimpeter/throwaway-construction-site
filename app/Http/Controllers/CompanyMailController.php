<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Company;

use App\Mail\ContactCompanyMail;

class CompanyMailController extends Controller
{
    public function contact(Request $request){
        $request->validate([
            'msg' => 'required',
            'email' => 'required'
        ]);

        try {
            $company = Company::latest()->first();
            $msg_data = [
                'subject' => $request->subject ?? '',
                'email' => $request->email,
                'msg' => $request->msg,
                'name' => $request->name ?? ''
            ];

            Mail::to($company->email)
                ->queue(new ContactCompanyMail($msg_data));
        
            return redirect()->back()->with('success', 'Email sent.');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
        
    }
}
