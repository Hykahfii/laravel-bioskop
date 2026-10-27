<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
    @extends('landing.layouts.head') 
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
        @extends('admin.layouts.head')
       <!--end top header-->

        <!--start sidebar -->
        @include('admin.layouts.sidebar')
       <!--end sidebar -->

       <!--start content-->
        @yield('content')  
       <!--end page main-->

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->

       <!--start switcher-->
       @extends('admin.layouts.switcher')
       <!--end switcher-->

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  @extends('admin.layouts.script')


</body>

</html>