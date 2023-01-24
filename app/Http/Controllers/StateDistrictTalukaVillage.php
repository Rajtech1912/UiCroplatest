<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Taluka;
use App\Models\State;
use App\Models\Village;

class StateDistrictTalukaVillage extends Controller
{
    public function index()
    {
      
        $data['states'] = State::get(["state_name","id"]);
        return view('Auth.fporegister',$data);
    }
    public function getDistrict(Request $request)
    {
        $data['districts'] = District::where("state_id",$request->state_id)
                    ->get(["district_name","id"]);
        return response()->json($data);
    }
    public function getTaluka(Request $request)
    {
        $data['talukas'] = Taluka::where("district_id",$request->district_id)
                    ->get(["taluka_name","id"]);
     
        return response()->json($data); 
      
    }
    public function getVillage(Request $request)
    {
        $data['villages'] = Village::where("taluka_id",$request->taluka_id)
                    ->get(["village_name","id"]);
     
        return response()->json($data); 
      
    }
    
}
