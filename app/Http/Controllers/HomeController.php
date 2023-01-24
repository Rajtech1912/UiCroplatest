<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function homeDashboard(){
    return view('pages.dashboard');
   }
   public function registerAsDashboard(){
      return view('pages.registerasdashboard');
   }
   public function loginAsDashboard(){
      return view('pages.loginasdashboard'); 
   }
}
