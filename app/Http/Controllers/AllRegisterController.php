<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Fpo;
use App\Models\FpoDirector;
use Illuminate\Support\Facades\Hash;
use Session;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Illuminate\Http\Request;

class AllRegisterController extends Controller
{

    /**
     * Show the application frontnd.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * 
     */

    //  public function uniqueIdGenerator(){
    //     $unique_token=(rand(11111,99999));
    //     $unique_id=CIFPO.$unique_token;
    //     echo $unique_id;
    // }

    public function uniqueIdGenerated()
    {
        do {
            $rand = $this->uniqueTokengenerator(5);
        } while (!empty(Fpo::where('unique_id', $rand)->first()));
        return $rand;
    }



    public function uniqueTokengenerator($length)
    {
        $characters = '123456789';
        $charactersLength = strlen($characters);
        $randomString = 'CIFPO';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
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
        $fpo->fpo_name = $request->fpo_name;
        $fpo->unique_id = $this->uniqueIdGenerated();
        $fpo->email = $request->email;
        $fpo->mobile = $request->mobile;
        $fpo->website = $request->website;
        $fpo->state_id = $request->state_id;
        $fpo->district_id = $request->district_id;
        $fpo->taluka_id = $request->taluka_id;
        $fpo->village_id = $request->village_id;
        $fpo->address = $request->address;
        $fpo->no_ceo_director = $request->no_ceo_director;
        $fpo->total_staff = $request->total_staff;
        $fpo->no_farmers = $request->no_farmers;
        $fpo->turnover = $request->turnover;
        $fpo->password = Hash::make($request['password']);
        $majors = $request->input('major_crop');
        $fpo->major_crop = json_encode($majors);

        $input = $request->input('input_purchases');
        $fpo->input_purchases = json_encode($input);

        // $fpo->major_crop =$request->['major_crop'];
        // $request['major_crop']=implode(',',$fpo);
        // $fpo->input_purchases =$request->['input_purchases'];
        // $request['input_purchases']=implode(',',$fpo);

        $fpo->save();

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
    public function index()
    {
        $state_data = DB::table('country')->select('id', 'state_name')->get();
        $stat_id = DB::table('fpos')->select('*')->where('id', $state_id)->first();
        return view('stat_id', compact('stat_id', 'state_data'));
    }

    public function loginFpo(Request $request)
    {
        // $message = array(
        //     'required.email'    =>  'This is required',
        //     'required.password' =>  'This is required',
        // );
        // $this->validate($request, [
        //     'email' =>  'required|email',
        //     'password'  =>  'required|min:8',
        // ]);

        // $email = $request->email;
        // $pass = $request->password;

        // if (Auth::guard('Fpo')->attempt([
        //     'email' => $email,
        //     'password' => $pass
        //         ], $request->get('remember'))) {

        //     return redirect()->route('pages.fpodashboard');
        // } else {
        //     return back()->withInput($request->only('email', 'remember'));
        // }
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12'
        ]);
        $fpo = Fpo::where('email', '=', $request->email)->first();
        if ($fpo) {
            if (Hash::check($request->password, $fpo->password)) {
                $request->session()->put("loginid", $fpo->id);
                return redirect('dashboardFpo');
            }
        } else {
            return back()->with('fail', 'Please Enter proper Email Id and password');
        }


    }
    public function dashboardFpo()
    {
        return "welcome to  your dashboard";

    }
}
