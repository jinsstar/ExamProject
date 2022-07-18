<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;

class ApplicantController extends Controller
{
    public function getAll()
    {
        $data["all"] = Applicant::all();
        return $data;
    }
    public function create(Request $request)
    {
        $user = Applicant::create($request->all());
        $response['status'] = 'success';
        return $response;
    }
    public function getApplicant(Request $request)
    {
        $data = Applicant::where('id',$request->id)->first();
        return $data;
    }
    public function editApplicant(Request $request)
    {
        $applicant              = Applicant::find($request->id);
        $applicant->name        = $request->name;
        $applicant->email       = $request->email;
        $applicant->contact     = $request->contact;
        $applicant->address     = $request->address;
        $applicant->save();

        $response['status'] = 'success';
        return $response;
    }   
    public function deleteApplicant(Request $request)
    {
        $applicant = Applicant::find($request->id);
        $applicant->delete();

        $response['status'] = 'success';
        return $response;
    }
}
