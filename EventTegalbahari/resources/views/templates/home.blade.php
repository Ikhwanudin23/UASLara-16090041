<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Event Tegal</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('BizPage/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('BizPage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('BizPage/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700') }}" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('BizPage/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('BizPage/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizPage/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizPage/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizPage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizPage/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('BizPage/css/style.css') }}" rel="stylesheet">

  <!-- Head dari template admin -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
  <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- chartist CSS -->
  <link href="{{ asset('assets/plugins/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/plugins/chartist-js/dist/chartist-init.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
  <!--This page css - Morris CSS -->
  <link href="{{ asset('assets/plugins/c3-master/c3.min.css') }}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <!-- You can change the theme colors from here -->
  <link href="{{ asset('assets/css/colors/blue.css') }}" id="theme" rel="stylesheet">
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Tegal Event</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{url ('/')}}">Home</a></li>
          <li class="menu-has-children"><a href="">Kategori Event</a>
            <ul>
              <li><a href="#">Olah Raga</a></li>
              <li><a href="#">Musik </a></li>
              <li><a href="#">Seminar</a></li>
              <li><a href="#">Expo</a></li>
               <li><a href="#">Bursa kerja</a></li>
                <li><a href="#">Lain lain</a></li>
            </ul>
          </li>
          <li><a href="{{url('/contact_us')}}">About Us</a></li>
          <li><a href="{{url('/team')}}">Developer Team</a></li>
          <li><a href="{{ url('/admin') }}">Log In</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

     <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{ asset('Bizpage/img/intro-carousel/1.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              
                {{--<a href="#featured-services" class="btn-get-started scrollto">Detail Event</a>--}}
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{ asset('Bizpage/img/intro-carousel/2.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
               
                {{--<a href="#featured-services" class="btn-get-started scrollto">Detail Event</a>--}}
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{ asset('Bizpage/img/intro-carousel/3.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
           <!--      <h2>Temporibus autem quibusdam</h2>
                <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p> -->
               {{-- <a href="#featured-services" class="btn-get-started scrollto">Detail Event</a>--}}
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">


  
     @yield('content')


  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Tegal Event</h3>
            <p>Sebuah website untuk melihat dan mempubuplikasikan event yang akan datang di kota tegal</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Link</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Kategori Event</a></li>
             {{-- <li><i class="ion-ios-arrow-right"></i> <a href="#">Kategori Peserta Event</a></li>--}}
              <li><i class="ion-ios-arrow-right"></i> <a href="#">About Us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Developer tim</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Log In</a></li>
              {{--<li><i class="ion-ios-arrow-right"></i> <a href="#">Publikasikan Eventmu</a></li>--}}
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
          
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> TegalEvent@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Tegal Event</h4>
            <p>tempat terbaikmu untuk mencari jembatan menuju impianmu.</p>
           
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">Ikhwanudin</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('BizPage/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('BizPage/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('BizPage/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('BizPage/js/main.js') }}"></script>


  <!-- JavaScript dan JQuery dari template admin -->
  <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
  <!--Wave Effects -->
  <script src="{{ asset('assets/js/waves.js') }}"></script>
  <!--Menu sidebar -->
  <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
  <!--stickey kit -->
  <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
  <!--Custom JavaScript -->
  <script src="{{ asset('assets/js/custom.min.js') }}"></script>
  <!-- ============================================================== -->
  <!-- This page plugins -->
  <!-- ============================================================== -->
  <!-- chartist chart -->
  <script src="{{ asset('assets/plugins/chartist-js/dist/chartist.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
  <!--c3 JavaScript -->
  <script src="{{ asset('assets/plugins/d3/d3.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/c3-master/c3.min.js') }}"></script>
  <!-- Chart JS -->
  <script src="{{ asset('assets/js/dashboard1.js') }}"></script>
  <!-- ============================================================== -->
  <!-- Style switcher -->
  <!-- ============================================================== -->
  <script src="{{ asset('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>
</html>
