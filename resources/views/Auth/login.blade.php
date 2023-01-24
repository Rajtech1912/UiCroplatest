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
<body>
<div class="container my-5">

<img src="{{asset('images/cropintellx.png')}}" alt="">
</div>
<div class="container">

<form class="form-signin" action="{{route('login-fpo')}}" method="post">
  @if(Session::has('success'))
  <div class="alert alert-success">{{Session::get('success')}}</div>
  @endif
  @if(Session::has('fail'))
  <div class="alert alert-danger">{{Session::get('fail')}}</div>
  @endif
  @csrf
      <h1 class="h3 mb-3 font-weight-normal ">FPO Login</h1>
      <label for="inputEmail" class="sr-only">Emailid</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="UserName" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <div class="">
        <span class="float-right"><a href="">forgot password</a></span>
       
      </div>
           <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
           <p class="mt-1 mb-3 text-muted">Dont have an account??<span class="mx-3"><a class="account" href="{{url('registerasdashboard')}}">Sign Up</a>  </span></p>

    </form>
    </div>

    <footer class="text-center text-white" style="background-color: #f1f1f1;">
 



 <div class="text-center text-dark p-3" style="background-color:white">
 <h6>Developed by:</h6>
  <h6>2022 Crop intelli Pvt Ltd.</h6>
  <h6>Legal Center |Trust Centre |Site Map |Accessibility<h6>

 </div>

</footer>
</body>
</html>