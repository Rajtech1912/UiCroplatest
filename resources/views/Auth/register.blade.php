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

    <a href="{{url('/register')}}" class="btn float-right text-white bg-success">Register as FPO</a>
</div>

<form class="container  mt-3 col-lg-12 mx-3" id="fpo" style="background-color:white;">
    
<div class="col-lg-6  border-0 col-md-6 box8 float-left" style="background-color:white;">
    
      <div class="col-sm-12  form-group my-3">
        <label for="name-f">Name of your FPO</label>
        <input type="text" class="form-control" name="namefpo" id="name-f" placeholder="Enter Your FPO Name"  required>
      </div>
      
      <div class="col-sm-12 form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
      </div>
  
      <div class="col-sm-12 form-group">
        <label for="tel">Contact No</label>
        <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter Your Contact Number." required>
      </div>
   
    
      <div class="col-sm-12 form-group">
        <label for="email">Website</label>
        <input type="text" class="form-control" name="website" id="email" placeholder="" required>
      </div>
      <div class="conatiner row col-md-12 col-sm-12 col-lg-12">
    
      <div class="col-sm-6 form-group">
        <label for="Country">State</label>
        <select class="form-control custom-select browser-default">
          <option value="Maharashtra">Maharashtra</option>
          <option value="Uttar pradesh">Uttar pradesh</option>
          <option value="Gujrat">Gujrat</option>
          </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Country">District</label>
        <select class="form-control custom-select browser-default">
          <option value="Afghanistan">Mumbai</option>
          <option value="Åland Islands">pune</option>
          <option value="Albania">Agra</option>         
          </select>
      </div>
      </div>
      <div class="conatiner row col-md-12 col-sm-12 col-lg-12">
      <div class="col-sm-6 form-group">
        <label for="Country">Taluka</label>
        <select class="form-control custom-select browser-default">
          <option value="Afghanistan">Borivali</option>
          <option value="Åland Islands">Åland Islands</option>
          <option value="Albania">Albania</option>
          </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Country">Village</label>
        <select class="form-control custom-select browser-default">
          <option value="Afghanistan">rampur</option>
          <option value="Åland Islands">devgaon</option>
          <option value="Albania">tarapur</option>
          </select>
      </div>
      <div class="mb-3 col-md-12">
       <label for="exampleFormControlTextarea1" class="form-label">Address</label>
       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      </div>
  
</div>
<div class="row  border-0 col-md-6 col-lg-6 box8 float-right" style="background-color:white;margin-right:1px">
   
      <div class="col-sm-4 col-md-4 form-group my-3">
        <label style="font-size:15px;" for="name-l">No ofCeo/Directors</label>
        <input type="text" class="form-control" name="lname" id="name-l" placeholder="" required>
      </div>
      <div class="col-sm-4 col-md-4 form-group my-3">
        <label  style="font-size:15px;" for="address-2">Total staff of FPO</label>
        <input type="address" class="form-control" name="address" id="address-2" placeholder="" required>
      </div>
      <div class="col-sm-4 col-md-4 form-group my-3">
        <label style="font-size:15px;"  for="address-1">No of Farmers Register</label>
        <input type="number" class="form-control" name="Locality" id="address-1" placeholder="" required>
      </div>
      <div class="row col-lg-12 newfiled" >
       <div class="col-sm-4 col-md-4 form-group my-3">
        <label style="font-size:15px;" for="name-2">No ofCeo/Directors</label>
        <input type="text" class="form-control" name="nameofceo" id="name-2" placeholder="" required>
      </div>
      <div class="col-sm-4 col-md-4 form-group my-3">
        <label  style="font-size:15px;" for="address-2">Mobile no</label>
        <input type="tel" class="form-control" name="mobileno" id="address-2" placeholder="" required>
      </div>
      <div class="col-sm-4 col-md-4 form-group my-3">
        <label style="font-size:15px;"  for="address-1">Email ID</label>
        <input type="email" class="form-control" name="emailid" id="address-1" placeholder="" required>
      </div>
      </div>
      <div class="row col-lg-12" id="addinput"></div>
      <div class="col-md-12 form-group my-1">
      <button type="button" class="float-left btn bg-success text-white" id="add_column">Add</button>
      </div>
     
      <div class="col-sm-4 col-md-4  form-group">
        <label style="font-size:14px;"  for="State">Annual Turnover(in Lakhs)</label>
        <input type="address" class="form-control" name="State" id="State" placeholder="" required>
      </div>
      
      
                    <div class="col-sm-4 col-md-4  form-group">
                      <label style="font-size:15px;" for="majorcrop">Major Crops grown</label>
                      <select class="form-control select2"  id="majorcrop" name="majorcrop"  multiple="multiple" required>
                                      <option value="" disabled>Select major crops grown</option>
                                      <option value="mumbai">Wyoming</option>
                                      <option value="pune">Wyoming</option>
                                      <option value="pune">Delhi</option>
                      </select>
                      
                    </div>

                    <div class="col-sm-4  col-md-4 form-group">
                      <label style="font-size:14px;"  for="">Source of input Purchases</label>
                      <select class="form-control select2"  id="inputpurchases"           name="majorcrop"   multiple="multiple" required>
                                        <option value="" disabled>Select Source of input Purchases</option>
                                        <option value="mumbai">Wyoming</option>
                                        <option value="pune">Wyoming</option>
                                        <option value="pune">Delhi</option>
                                  </select>
                    </div>
                    <div class="mb-3 col-md-12">
       <label for="exampleFormControlTextarea1" class="form-label">Problem facing by the FPO</label>
       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
  // var countre=1;
  // function addMoreField(){
  //   countre+=1
  //   html='<div class="col-sm-4 col-md-4 form-group my-3">\
  //       <label style="font-size:15px;" for="name-2">No ofCeo/Directors</label>\
  //       <input type="text" class="form-control" name="nameofceo" id="name-2" placeholder="" required>\
  //     </div>\
  //     <div class="col-sm-4 col-md-4 form-group my-3">\
  //       <label  style="font-size:15px;" for="address-2">Mobile no</label>\
  //       <input type="address" class="form-control" name="mobileno" id="address-2" placeholder="" required>\
  //     </div>\
  //     <div class="col-sm-4 col-md-4 form-group my-3">\
  //       <label style="font-size:15px;"  for="address-1">Email ID</label>\
  //       <input type="number" class="form-control" name="emailid" id="address-1" placeholder="" required>\
  //     </div>'
  //     var form=document.getElementById('fpo')
  //     form.innerHtml+=html
  // }
//   $(document).ready(function(){
//     $('#add_column').on('click',function(){
//       var html=' <div class="col-sm-4 col-md-4 form-group my-3">\
//         <label style="font-size:15px;" for="name-2">No ofCeo/Directors</label>\
//         <input type="text" class="form-control" name="nameofceo" id="name-2" placeholder="" required>\
//       </div>\
//        <div class="col-sm-4 col-md-4 form-group my-3">\
//         <label  style="font-size:15px;" for="address-2">Mobile no</label>\
//         <input type="address" class="form-control" name="mobileno" id="address-2" placeholder="" required>\
//       </div>\
//       <div class="col-sm-4 col-md-4 form-group my-3">\
//         <label style="font-size:15px;"  for="address-1">Email ID</label>\
//         <input type="number" class="form-control" name="emailid" id="address-1" placeholder="" required>\
//       </div>\
//    <div class="col-md-12 form-group my-1">\
//       <button type="button" class="float-right btn bg-danger text-white" id="remove">Remove</button>\
//       </div>';
    
//       $('#addinput').append(html);
//     });
//   });
//  $(document).on('click','#remove',function(){
//     $(this).closest('#addinput').remove();
//  });



//  $('#add_column').click(function() {
//   $('.newfiled').clone().appendTo('#addinput');
//   $('#addinput.newfiled').addClass('single remove');
//   $('.single #add_column').remove();
//   $('.single').append('<button class="remove-field bg-danger btn-remove-customer">Remove Fields</button>');
//   $('#addinput > .single').attr("class", "remove");

//   $('#addinput div').each(function() {
//     var count = 0;
//     var fieldname = $(this).attr("name");
//     $(this).attr('name', fieldname + count);
//     count++;
//   });

// });

// $(document).on('click', '.remove-field', function(e) {
//   $(this).parent('.remove').remove();
//   e.preventDefault();
// });



  // $(document).ready(function(){
  //   $('#add_column').on('click',function(){
  //     var html='';
  //     html+='<div class="col-sm-4 col-md-4 form-group my-3">\
  //       <label style="font-size:15px;" for="name-2">No ofCeo/Directors</label>\
  //       <input type="text" class="form-control" name="nameofceo" id="name-2" placeholder="" required>\
  //     </div>';
  //     html+=' <div class="col-sm-4 col-md-4 form-group my-3">\
  //       <label  style="font-size:15px;" for="address-2">Mobile no</label>\
  //       <input type="address" class="form-control" name="mobileno" id="address-2" placeholder="" required>\
  //     </div>';
  //     html+=' <div class="col-sm-4 col-md-4 form-group my-3">\
  //       <label style="font-size:15px;"  for="address-1">Email ID</label>\
  //       <input type="number" class="form-control" name="emailid" id="address-1" placeholder="" required>\
  //     </div>';
  //     html+='<div class="col-md-12 form-group my-1">\
  //     <button type="button" class="float- btn bg-danger text-white" id="remove">Remove</button>\
  //     </div>';
  //     $('#addinput').append(html);
  //   });
  // });
  // $(document).on('click','#remove',function(){
  //   $(this).closest('#addinput').remove();
  // });
</script>
  </body>
</html>