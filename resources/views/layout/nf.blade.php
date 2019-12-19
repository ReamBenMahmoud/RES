<!DOCTYPE html>
<html lang="ar">
  <head>
    <title>Feliciano - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset ('https://fonts.googleapis.com/css?family=Tajawal&display=swap')}}" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet"> --}}
    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900')}} " rel="stylesheet">

    <link href="{{asset('https://fonts.googleapis.com/css?family=Great+Vibes&display=swap')}}" rel="stylesheet">

     
    <link rel="stylesheet" href=" {{asset('css/open-iconic-bootstrap.min.css')}}">

     
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    
     <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">


     <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">


     <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">


     <link rel="stylesheet" href="{{asset('css/aos.css')}}">


     <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">


     <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">


     <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

    
     <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">


     <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">


 	<link rel="stylesheet" href="{{asset('css/style.css')}}">


     <link rel="stylesheet" href="{{asset('css/pm.css')}}">
	 

 	<link rel="stylesheet" href="{{asset('css/buttondone.css')}}">



  </head>
  <body>
    
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Order System</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> القائمة
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav" dir="rtl">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="/" class="nav-link">الرئيسية</a></li>
            <li class="nav-item"><a href="/meals" class="nav-link"> القائمة</a></li>
            <li class="nav-item "><a href="/about" class="nav-link">معلومات عنّا</a></li>
	          <li class="nav-item"><a href="/contact" class="nav-link">تواصل معنا</a></li>
	          <li class="nav-item cta"><a href="/reservation" class="nav-link">حجز طاولة</a></li>
         
          @auth()
              
 	          <li class="nav-item cta"><a href="\categories\create" class="nav-link" style="margin:0px 10px";> اضافة صنف</a></li>
	          <li class="nav-item cta " ><a href="\meals\create" class="nav-link" style="margin:0px 5px";> اضافة وجبة </a></li>
         
         
          @endauth
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

@yield ('content')




     <footer class="ftco-footer ftco-bg-dark" dir="rtl">
		<div class="container" dir="rtl">
		  <div class="row" dir="rtl">
			<div class="col-md-12 col-lg-12" dir="rtl">
			  <div class="ftco-footer-widget" dir="rtl">
				<h2 class="ftco-heading-2 text-right mb-1" >Order System</h2>
				<p class="text-right mb-1"> نظام الطلب اونلاين للمطاعم و المقاهي وايضا نظام حجز طاولات قبل الوصول للمطعم او المقهى لتفادي الزحمة</p>
				<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-0" dir="rtl">
				  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
				</ul>
			  </div>
			</div>
			
		  </div>
		  <div class="row">
			<div class="col-md-12 text-center">
  
			  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tec Camp by Our Team
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		  </div>
		</div>
	  </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('js/jquery.min.js')}}"></script>


   <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>


   <script src="{{asset('js/popper.min.js')}}"></script>

  
   <script src="{{asset('js/bootstrap.min.js')}}"></script>


   <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>


   <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>


   <script src="{{asset('js/jquery.stellar.min.js')}}"></script>


   <script src=" {{asset('js/owl.carousel.min.js')}}"></script>


   <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>


   <script src="{{asset('js/aos.js')}}"></script>

  
   <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>


   <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>


   <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>


   <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>


   <script src="{{asset('js/scrollax.min.js')}}"></script>


   <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>


   <script src="{{asset('js/google-map.js')}}"></script>


   <script src=" {{asset('js/main.js')}}"></script>


   <script src=" {{asset('js/pm.js')}}"></script>


  </body>
</html>