<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>


 


</head>
<body style="background-color:white;" >

<div class="container my-5">

     <img src="{{asset('images/cropintellx.png')}}" alt="">
    <h4 class="text-center registerasfpo " style="display:inline-block;">Register as Fpo </h4>
    <a href="{{url('/fporegister')}}" class="btn float-right text-white bg-success">Register as FPO</a>
</div>
@section('content')
<form action="{{route('fpo/registration')}}" method="post" class="container  mt-3 col-lg-12 mx-3" id="fpo" style="background-color:white;">
@csrf
    
<div class="col-lg-6  border-0 col-md-6 box8 float-left" style="background-color:white;">
    
      <div class="col-sm-12  form-group my-3">
        <label for="name">Name of your FPO</label>
        <input type="text" class="form-control" name="fpo_name" id="name" placeholder="Enter Your FPO Name"  required>
        @if ($errors->has('fpo_name'))
                    <span class="text-danger">{{ $errors->first('fpo_name') }}</span>
                @endif
      </div>
     
      <div class="col-sm-12 form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
        @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
      </div>

      <div class="col-sm-12 form-group">
        <label for="tel">Contact No</label>
        <input type="tel" name="mobile" class="form-control" id="tel" placeholder="Enter Your Contact Number." required>
        @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
      </div>
   
    
      <div class="col-sm-12 form-group">
        <label for="website">Website</label>
        <input type="text" class="form-control" name="website" id="website" placeholder="" required>
        @if ($errors->has('website'))
                    <span class="text-danger">{{ $errors->first('website') }}</span>
                @endif
      </div>
   
      <div class="conatiner row col-md-12 col-sm-12 col-lg-12">
    
      <div class="col-sm-6 form-group">
        <label for="state">State</label>
          <select class="form-control custom-select browser-default" name="state_id"  id="state-dropdown">
        
                                    <option value="">Select State</option>
                                    @foreach ($states as $state)
                                    <option value="{{$state->id}}">
                                        {{$state->state_name}}
                                    </option>
                                    @endforeach
                                </select>
       

          @if ($errors->has('state_id'))
                    <span class="text-danger">{{ $errors->first('state_id') }}</span>
                @endif
      </div>
      <div class="col-sm-6 form-group">
        <label  for="district">District</label>
        <select name="district_id" id="district-dropdown" class="form-control custom-select browser-default">
          <option value="">Select District</option>
          
          </select>
          @if ($errors->has('district_id'))
                    <span class="text-danger">{{ $errors->first('district_id') }}</span>
                @endif
      </div>
      </div>
      <div class="conatiner row col-md-12 col-sm-12 col-lg-12">
      <div class="col-sm-6 form-group">
        <label for="taluka">Taluka</label>
        <select name="taluka_id" id="taluka-dropdown" class="form-control custom-select browser-default">
       
          </select>
          @if ($errors->has('taluka_id'))
                    <span class="text-danger">{{ $errors->first('taluka_id') }}</span>
                @endif
      </div>
      <div class="col-sm-6 form-group">
        <label for="village">Village</label>
        <select name="village_id" id="village-dropdown" class="form-control custom-select browser-default">
    
        </select>
        @if ($errors->has('village_id'))
                    <span class="text-danger">{{ $errors->first('village_id') }}</span>
                @endif
      </div>
      <div class="mb-3 col-md-12">
       <label for="exampleFormControlTextarea1" class="form-label">Address</label>
       <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
       @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif

      </div>
      </div>
  
</div>
<div class="row  border-0 col-md-6 col-lg-6 box8 float-right" style="background-color:white;margin-right:1px">
     <div class="row col-lg-12">
      <div class="col-sm-4 col-md-4 form-group my-3">
        <label style="font-size:15px;" for="noofceodirectors">No ofCeo/Directors</label>
        <input type="text" class="form-control" name="no_ceo_director" id="noofceodirectors" placeholder="" required>
        @if ($errors->has('no_ceo_director'))
                    <span class="text-danger">{{ $errors->first('no_ceo_director') }}</span>
                @endif
      </div>
      <div class="col-sm-4 col-md-4 form-group my-3">
        <label  style="font-size:15px;" for="totalstafffpo">Total staff of FPO</label>
        <input type="number" class="form-control" name="total_staff" id="totalstafffpo" placeholder="" required>
        @if ($errors->has('total_staff'))
                    <span class="text-danger">{{ $errors->first('total_staff') }}</span>
                @endif
      </div>
      <div class="col-sm-4 col-md-4 form-group my-3">
        <label style="font-size:15px;"  for="nooffarmers">No of Farmers Register</label>
        <input type="tel" class="form-control" name="no_farmers" id="nooffarmers" placeholder="" required>
        @if ($errors->has('no_farmers'))
                    <span class="text-danger">{{ $errors->first('no_farmers') }}</span>
                @endif
      </div>
      </div>
      <div class="col-lg-12 row addinput" >
       <div class="col-sm-4 col-md-4 form-group my-3">
        <label style="font-size:15px;" for="nameofceo1">No ofCeo/Directors</label>
        <input type="text" class="form-control" name="nameofceo1" id="nameofceo1" placeholder="" >
        @if ($errors->has('nameofceo1'))
                    <span class="text-danger">{{ $errors->first('nameofceo1') }}</span>
                @endif
      </div>
      <div class="col-sm-4 col-md-4 form-group my-3">
        <label  style="font-size:15px;" for="mobileno1">Mobile no</label>
        <input type="tel" class="form-control" name="mobileno1" id="mobileno1" placeholder="" >
        @if ($errors->has('mobileno1'))
                    <span class="text-danger">{{ $errors->first('mobileno1') }}</span>
                @endif
      </div>
      <div class="col-sm-4 col-md-4 form-group my-3">
        <label style="font-size:15px;"  for="emailid1">Email ID</label>
        <input type="email" class="form-control" name="emailid1" id="emailid1" placeholder="" >
        @if ($errors->has('emailid1'))
                    <span class="text-danger">{{ $errors->first('emailid1') }}</span>
                @endif
      </div>
      </div>
      <div class="row col-lg-12" id="addinput"></div>
      <div class="col-md-12 form-group my-1">
      <button type="button" class="float-left btn bg-primary text-white" id="add_column">Add</button>
      </div>
     
      <div class="col-sm-4 col-md-4  form-group">
        <label style="font-size:14px;"  for="anualturnover">Annual Turnover(in Lakhs)</label>
        <input type="address" class="form-control" name="turnover" id="anualturnover" placeholder="" required>
        @if ($errors->has('turnover'))
                    <span class="text-danger">{{ $errors->first('turnover') }}</span>
                @endif
      </div>
      
      
                   <div class="col-lg-4 col-md-4  form-group">
                      <label style="font-size:15px;" for="majorcrop">Major Crops grown</label>
                      <select name="major_crop[]" class="form-control select2"  id="majorcrop" name="majorcrop"  multiple="multiple" required>
                                      <option value="" disabled>Select major crops grown</option>
                                      <option value="1">Wyoming</option>
                                      <option value="2">Wheat</option>
                                      <option value="3">Delhi</option>
                      </select>
                      @if ($errors->has('majorcrop'))
                    <span class="text-danger">{{ $errors->first('majorcrop') }}</span>
                @endif
                    </div>

                    <div class="col-lg-4  col-md-4 form-group">
                      <label style="font-size:14px;"  for="inputpurchases">Source of input Purchases</label>
                      <select name="input_purchases[]" class="form-control select2"  id="inputpurchases"           name="majorcrop"   multiple="multiple" required>
                                        <option value="" disabled>Select Source of input Purchases</option>
                                        <option value="1">Random</option>
                                        <option value="2">Wheat</option>
                                        <option value="3">Delhi</option>
                                  </select>
                                  @if ($errors->has('inputpurchases'))
                    <span class="text-danger">{{ $errors->first('inputpurchases') }}</span>
                @endif
                    </div>  
                    <div class="mb-3 col-md-12">
       <label for="problemfacingfpo" class="form-label">Problem facing by the FPO</label>
       <textarea class="form-control" name="problem_facing_fpo" id="problemfacingfpo" rows="3"></textarea>
       @if ($errors->has('problemfacingfpo'))
                    <span class="text-danger">{{ $errors->first('problemfacingfpo') }}</span>
                @endif
      </div>
      <div class="col-md-12 text-center mb-2">
      <button class="btn bg-success text-white">Submit</button>
      </div>
     
      
           
</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!-- 
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>  
<script>
$(function(){
  $('#majorcrop').select2({
      selectOnClose: true
    });
  });
  $(function(){
  $('#inputpurchases').select2({
      selectOnClose: true
    });
  });

 $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".addinput"); //Fields wrapper
    var add_button      = $("#add_column"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row " id="div"> <div class="col-sm-4 col-md-4 form-group my-3">\
        <label style="font-size:15px;" for="name-2">No ofCeo/Directors</label>\
        <input type="text" class="form-control" name="nameofceo'+ x +'" id="name'+ x+'" placeholder="" required>\
      </div>\
       <div class="col-sm-4 col-md-4 form-group my-3">\
        <label  style="font-size:15px;" for="address-2">Mobile no</label>\
        <input type="address" class="form-control" name="mobileno'+ x +'" id="mobileno'+x+'" placeholder="" required>\
      </div>\
      <div class="col-sm-4 col-md-4 form-group my-3">\
        <label style="font-size:15px;"  for="address-1">Email ID</label>\
        <input type="number" class="form-control" name="emailid'+ x +'" id="emailid'+x+'" placeholder="" required>\
      </div>\
   <div class="col-md-12 form-group my-1">\
      <button type="button" class="float-right remove btn bg-danger text-white" id="remove">Remove</button>\
      </div></div>'); // add input boxes.
        }
    }); 
    
    $(wrapper).on("click",".remove", function(e){ //user click on remove text
        e.preventDefault(); $(this).closest('#div').remove(); x--;
    })
});


$(document).ready(function() {
            $('#state-dropdown').on('change', function() {
                var state_id= this.value;
                $("#district-dropdown").html('');
                $.ajax({
                    url: "{{url('get-district-by-states')}}",
                    type: "POST",
                    data: {
                        state_id: state_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        // console.log(result);
                        $("#district-dropdown").append('<option value="">Select District</option>');
                        $.each(result.districts, function(key, value) {

                          //  console.log(key,value)
                            $("#district-dropdown").append('<option value="' + value.id + '">' + value.district_name + '</option>');
                        });
                        $('#taluka-dropdown').html('<option value="">Select District First</option>');
                    }
                });
            });
            $('#district-dropdown').on('change', function() {
                var district_id = this.value;
                $("#taluka-dropdown").html('');
                $.ajax({
                    url: "{{url('get-talukas-by-district')}}",
                    type: "POST",
                    data: {
                      district_id: district_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function(result) {
                      $("#taluka-dropdown").append('<option value="">Select Talukas</option>');
                        $.each(result.talukas, function(key, value) {
                          
                            $("#taluka-dropdown").append('<option value="' + value.id + '">' + value.taluka_name + '</option>');
                        });
                    }
                });
            });
            $('#taluka-dropdown').on('change', function() {
                var taluka_id= this.value;
                $("#village-dropdown").html('');
                $.ajax({
                    url: "{{url('get-villages-by-talukas')}}",
                    type: "POST",
                    data: {
                      taluka_id: taluka_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function(result) {
                      $("#village-dropdown").append('<option value="">Select Village</option>');
                        $.each(result.villages, function(key, value) {
                         console.log(key,value)
                          
                            $("#village-dropdown").append('<option value="' + value.id + '">' + value.village_name + '</option>');
                        });
                    }
                });
            });
        });
</script>
  </body>
</html> 