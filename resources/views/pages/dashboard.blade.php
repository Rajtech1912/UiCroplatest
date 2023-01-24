@extends('layouts.default')
@section('title', 'Dashboard')
@section('content')
<div class="container my-5">

      <img src="{{asset('images/cropintellx.png')}}" alt="">
      <a href="{{url('/registerasdashboard')}}" class="btn float-right bg-success">Register</a>
  

   <div class="col-xl-12 main pt-5 mt-3">
           
        <div class="row mb-4">


            <div class="fpocontainer col-xl-4 col-sm-12 col-md-12 py-2 rounded card text-white h-100 border-0 card-body border-0">
               <div class="fpocontainer-1">
                    <p class="pfpocontainer"> Hello</p>
                       <div class="justify-content-center">
                         <a href="{{url('fporegister')}}"class="text-uppercase ">FPO's</a>
                        </div>
                        <img class="rounded float-right"  src="{{asset('/images/Fpo.png')}}">        
                </div> 
            </div>
    

                       
            <div class="individualscontainer col-xl-4 col-sm-12 col-md-12 py-2 rounded card text-white h-100 border-0 card-body border-0">
               <div class="individualscontainer-1">
                     <p class="pindividualscontainer"> Hello</p>
                    <div class="justify-content-center">
                         <h6 class="text-uppercase">individuals</h6>
                    </div>
                    <img class="rounded float-right"  src="{{asset('/images/individuals.png')}}">        
                </div> 
            </div>
            
                
            <div class="corporates col-xl-4 col-sm-12 col-md-12  py-2 rounded card text-white h-100 border-0 card-body border-0">
               <div class="corporates-1">
                     <p class="pcorporates"> Hello</p>
                    <div class="justify-content-center">
                         <h6 class="text-uppercase textcenter">Corporates</h6>
                    </div>
                    <img class="rounded float-right"  src="{{asset('/images/corporates.png')}}">        
                </div> 
            </div>
            
        </div>
        
        <div class="row mb-4">


            <div class="farmers col-xl-4 col-sm-12 col-md-12 py-2 rounded card text-white h-100 border-0 card-body border-0" >
               <div class="farmers-1">
                    <p class="pfarmers"> Hello</p>
                       <div class="justify-content-center">
                         <h6 class="text-uppercase textcenter">Farmers</h6>
                        </div>
                        <img class="rounded float-right"  src="{{asset('/images/farmers.png')}}">        
                </div> 
            </div>
    

                       
            <div class="cropinsurance col-xl-4 col-sm-12 col-md-12  py-2 rounded card text-white h-100 border-0 card-body border-0">
               <div class="cropinsurance-1">
                     <p class="pcropinsurance"> Hello</p>
                    <div class="justify-content-center">
                         <h6 class="text-uppercase textcenter "style="display:inline-block;margin:15px 41px 11px 110px;">Crop Insurance</h6>
                    </div>
                    <img class="rounded float-right" src="{{asset('/images/croppinsurance.png')}}">        
                </div> 
            </div>
            
                
            <div class="fertillizercompanies col-xl-4 col-md-12 col-sm-12 py-2 rounded card text-white h-100 border-0 card-body border-0">
               <div class="fertillizercompanies-1">
                     <p class="pfertillizercompanies"> Hello</p>
                    <div class="justify-content-center">
                         <h6 class="text-uppercase textcenter">Fertillizer Companies</h6>
                    </div>
                    <img class="rounded float-right"  src="{{asset('/images/fertilizercompanies.png')}}">        
                </div> 
            </div>
            
        </div>
        <div class="row mb-4">


            <div class="farmmachinery col-xl-4 col-sm-12 col-md-12  py-2 rounded card text-white h-100 border-0 card-body border-0">
               <div class="farmmachinery-1">
                    <p class="pfarmmachinery"> Hello</p>
                       <div class="justify-content-center">
                         <h6 class="text-uppercase textcenter">Farm Machinery</h6>
                        </div>
                        <img class="rounded float-right"  src="{{asset('/images/farmmachinery.png')}}">        
                </div> 
            </div>
    

                       
            <div class="traders col-xl-4 col-sm-12 col-md-12  py-2 rounded card text-white h-100 border-0 card-body border-0">
               <div class="traders-1">
                     <p class="ptraders"> Hello</p>
                    <div class="justify-content-center">
                         <h6 class="text-uppercase textcenter">Traders</h6>
                    </div>
                    <img class="rounded float-right"  src="{{asset('/images/traderss.png')}}">        
                </div> 
            </div>
            
                
            <div class="seedcompanies col-xl-4 col-sm-12 col-md-12  py-2 rounded card text-white h-100 border-0 card-body border-0">
               <div class="seedcompanies-1">
                     <p class="pseedcompanies"> Hello</p>
                    <div class="justify-content-center">
                         <h6 class="text-uppercase textcenter "style="display:inline-block;margin:15px 41px 11px 110px;">Seed Companies</h6>
                    </div>
                    <img class="rounded float-right"  src="{{asset('/images/seed.png')}}">        
                </div> 
            </div>
            
        </div>
        <div class="row mb-4">


            <div class="dealers col-xl-4 col-sm-12 col-md-12  py-2 rounded card text-white h-100 border-0 card-body border-0">
               <div class="dealers-1">
                    <p class="pdealers"> Hello</p>
                       <div class="justify-content-center">
                         <h6 class="text-uppercase textcenter">Dealers</h6>
                        </div>
                        <img class="rounded float-right"  src="{{asset('/images/dealers.png')}}">        
                </div> 
            </div>
    

                       
            <div class="Others col-xl-4 col-sm-12 col-md-12  py-2 rounded card text-white h-100 border-0 card-body border-0">
               <div class="Others-1">
                     <p class="pOthers"> Hello</p>
                    <div class="justify-content-center">
                         <h6 class="text-uppercase">Others</h6>
                    </div>
                    <img class="rounded float-right"  src="{{asset('/images/others.png')}}">        
                </div> 
            </div>
            
                
            <div class="others1 col-xl-4 col-sm-12 col-md-12  py-2 rounded card text-white h-100 border-0 card-body border-0">
               <div class="others1-1">
                     <p class="pothers1"> Hello</p>
                    <div class="justify-content-center">
                         <h6 class="text-uppercase ">Others</h6>
                    </div>
                    <img class="rounded float-right"  src="{{asset('/images/individuals.png')}}">        
                </div> 
            </div>
            
        </div>
        <div class="text-center">
        <a href="{{url('/loginasdashboard')}}" class="btn btn-success btn-lg">Login</a>
        </div>
    </div>
  @endsection  