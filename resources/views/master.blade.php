<!DOCTYPE html>
<html>

<head>
  <title>Nhà sách Lê Văn Tám</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
  <meta http-equiv="Content-Language" content="en-US" />
  <meta name="description" content="Dynamic responsive Ecommerce free web template" />
  <meta name="keywords" content="Ecommerce template, Ecommerce free responsive template, free template" />
  <meta name="author" content="Maniruzzaman Akash">

  <!-- CSS links -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
  <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />


  <!-- Animate.css -->
  <link type="text/css" rel="stylesheet" href="css/animate.css" />

  <!-- Owl Carousel CSS-->
  <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
  <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />



  <!-- Mega navigation bar -->
  <link rel="stylesheet" type="text/css" media="all" href="css/webslidemenu.css" />

  <!-- Main css link -->
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <link rel="icon" href="images/logo.png" />

</head>

<body>
  <div class="wrapper">
    <!-- Header part  -->
    <div class="header" id="top">
      @include('header')
    </div>
    <!-- End of header part  -->

    <!-- content part -->
    <div class="content-area">
      @yield('content')
    </div>
    <!-- End content Area class -->


    <div class="footer-top">
      @include('footer')
    </div> <!-- End Footer top -->

    <div class="footer-bottom">
      <p class="footer-credit">
        &copy;<script type="text/javascript">
          document.write(new Date().getFullYear())
        </script> - All rights reserved <a href="index.html">Your shop</a> | Designed by <a href="https://maniruzzaman-akash.blogspot.com"> Maniruzzaman Akash </a>
      </p>
    </div>
    <!--End Footer bottom -->

    <div class="scroll">
      <a href="#top" class="scroll-to-top hidden">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>


  </div> <!-- End wrapper -->



  <!-- Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>

  <script type="text/javascript">
    jQuery(document).ready(function() {
      // alert('test message');

      // var bd_phone_pattern = /^(?:\+88|01)?\d{11}$/;
      // var contact1 = "01951233084";
      // var contact2 = "+8801951233084";
      // alert(bd_phone_pattern.test(contact1));
      // if (bd_phone_pattern.test(contact1)) {
      //     alert('Regexp Has Matched');
      // }else{
      //     alert('Regexp Hasn\'t Matched');
      // }
    });
  </script>



  <script type="text/javascript" src="js/owl.carousel.min.js"></script>

  <script src="js/wow.min.js"></script>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/webslidemenu.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
