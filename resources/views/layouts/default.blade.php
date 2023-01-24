<!doctype html>
<html>
<head>
   @include('includes.head')

</head>
<body>
<div class="container">

   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="text-center">
       @include('includes.footer')
   </footer>

</div>
<scripts>
    @yield('scripts')
</scripts>
</body>
</html>