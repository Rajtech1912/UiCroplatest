<?php

namespace App\Http\Controllers;
use App\Models\Fpo;
use App\Models\FpoDirector;

use Illuminate\Support\Facades\Hash;
use Auth;
use DataTables;



use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerPage(){
    return view('Auth.register');
    }
    public function fpoRegister(){
        return view('Auth.fporegister');
    }
    public function login(){
        return view('Auth.login');
    }
    public function fpo_registration(Request $request)
    {
        // https://www.itsolutionstuff.com/post/laravel-8-form-validation-exampleexample.html
        // dd($request->all(),FpoDirector::all());
        // $validatedData = $request->validate([
        //     'fpo_name' => 'required',
        //     'fpo_email' => 'required'
        // ], [
        //     'fpo_name.required' => 'Fpo Name is required',
        //     'fpo_email.required' => 'Fpo Email is required'
        // ]);

        $fpo = new Fpo;
        $fpo->fpo_name     =  $request->fpo_name;
        $fpo->email      =  $request->email;
        $fpo->mobile      =  $request->mobile;
        $fpo->website     =  $request->website;
        $fpo->state_id      =  $request->state_id;
        $fpo->district_id      =  $request->district_id;
        $fpo->taluka_id      =  $request->taluka_id;
        $fpo->village_id      =  $request->village_id;
        $fpo->address      =  $request->address;
        $fpo->no_ceo_director      =  $request->no_ceo_director;
        $fpo->total_staff      =  $request->total_staff;
        $fpo->no_farmers      =  $request->no_farmers;
        $fpo->turnover     =  $request->turnover;
        $fpo->password = Hash::make($request['password']);

        dd($fpo);
    

        //upload director name
            // foreach($request->directors as $data){
            //     $fpo_director = new FpoDirector;
            //     $fpo_director->fpo_id   =  $fpo->id;
            //     $fpo_director->name     =  $data['direc_name'];
            //     $fpo_director->email      =  $data['direc_email'];
            //     $fpo_director->mobile      =  $data['direc_mobile'];
            //     $fpo_director->save();
            // }
    return response("Data Added Successfully");

        // return response()->json(['success'=>true, 'message'=>'Successfully'],200);

    }

}
