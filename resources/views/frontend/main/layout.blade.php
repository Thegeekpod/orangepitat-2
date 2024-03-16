<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>:: Welcome to our Orangepetal ::</title>
      <!-- Bootstrap -->
      <!-- Latest compiled and minified CSS -->
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" type="text/css">
      <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" type="text/css">
      <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
      <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
      <script src="https://kit.fontawesome.com/ba6f85bfa9.js" crossorigin="anonymous"></script>
      <!-----number animate link--->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
      <!-----number animate link--->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <!-- Sticky Header-->    
      <script>
         $(window).scroll(function() {
         if ($(this).scrollTop() > 50){  
             $('.menu-row').addClass("sticky");
         
         }
         else{
             $('.menu-row').removeClass("sticky");
            
         }
         });
      </script>    
      <!-- Sticky Header-->  
   </head>

<body>

    
<div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <ul class="top-details">
                     <li>
                        <i class="fa-solid fa-phone-volume"></i>
                        <div>
                           <strong>+91 9876543210</strong><br>
                        </div>
                     </li>
                     <li>
                        <i class="fa-solid fa-envelope"></i>
                        <div>
                           <strong>info@companyname.com</strong><br>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="col-md-6">
                  <ul class="top-social-media">
                     <li><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                     <li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
                     <li><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar navigation-menu">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <i class="fa-solid fa-bars"></i>                           
               </button>
               <a class="navbar-brand" href="#"><img src="{{asset('frontend/images/logo.png')}}" alt="main logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="/">Home</a></li>
                  <li><a href="about">About Us</a></li>
                  <li><a href="location">Location</a></li>
                  <li><a href="gallery">Gallery</a></li>
                  <li><a href="testimonials">Testimonials</a></li>
                  <li><a href="contact">Contact Us</a></li>
               </ul>
            </div>
         </div>
      </nav>

    @yield('content')


    <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="footer-weiget">
                     <img src="{{asset('frontend/images/footer-logo.png')}}">
                     <strong>Discover amzaing places at exclusive deals.</strong>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-weiget text-center">
                     <h5>Navigation</h5>
                     <p>Street Address Here,
                        Kolkata, West Bengal
                        Zip Code
                     </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-weiget text-right">
                     <h5>Contact Information</h5>
                     <ul class="footer-details">
                        <li><i class="fa-solid fa-phone-volume"></i> <span>+91 9876543210</span></li>
                        <li><i class="fa-solid fa-envelope"></i> <span>info@companyname.com</span></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row credit-sec">
               <div class="col-md-6">
                  <ul>
                     <li><a href="#">Contact Us </a></li>
                     <li><a href="#">Privacy Policy </a></li>
                     <li><a href="#">Terms & Conditions  </a></li>
                  </ul>
               </div>
               <div class="col-md-6">
                  <strong> Copyright © 2024, Companyname. All Rights Reserved</strong>
               </div>
            </div>
         </div>
      </footer>
      <!--   <div class="credit-section">
         <span>Copyright 2023   |  all rights reserved</span>
         </div> -->

      <script>
      AOS.init();
      </script>
      <script type="text/javascript">
         $(document).ready(function() {
          
           var owl = $("#services");
             
          
           owl.owlCarousel({
         //      items : 2,
         //      itemsDesktop : [1000,5], 
                
                 loop:true,
                 margin:30,
               nav:true,
                 autoplay:true,
                autoplayTimeout:5000,
                 autoplayHoverPause:true,
                responsive:{
                 0:{
                     items:1,
                     nav:true,
                     loop:true
                 },
                 640:{
                     items:1,
                     nav:false,
                     loop:true
                 },
                      
                 1000:{
                     items:3,
                     nav:false,
                     loop:true
                 }
             }
         //      itemsDesktopSmall : [900,1],
         //      itemsTablet: [600,1], 
         //      itemsMobile : false 
               
           });
         });    
      </script> 
      <script type="text/javascript">
         $(document).ready(function() {
          
           var owl = $("#Testimonials");
             
          
           owl.owlCarousel({
         //      items : 2,
         //      itemsDesktop : [1000,5], 
                
                 loop:true,
                 margin:30,
               nav:true,
                 autoplay:true,
                autoplayTimeout:5000,
                 autoplayHoverPause:true,
                responsive:{
                 0:{
                     items:1,
                     nav:true,
                     loop:true
                 },
                 640:{
                     items:1,
                     nav:false,
                     loop:true
                 },
                      
                 1000:{
                     items:3,
                     nav:false,
                     loop:true
                 }
             }
         //      itemsDesktopSmall : [900,1],
         //      itemsTablet: [600,1], 
         //      itemsMobile : false 
               
           });
         });    
      </script> 
      <script type="text/javascript">
         $(document).ready(function() {
          
           var owl = $("#Packages");
             
          
           owl.owlCarousel({
         //      items : 2,
         //      itemsDesktop : [1000,5], 
                
                 loop:true,
                 margin:30,
               nav:true,
                 autoplay:true,
                autoplayTimeout:5000,
                 autoplayHoverPause:true,
                responsive:{
                 0:{
                     items:1,
                     nav:true,
                     loop:true
                 },
                 640:{
                     items:1,
                     nav:false,
                     loop:true
                 },
                      
                 1000:{
                     items:3,
                     nav:false,
                     loop:true
                 }
             }
         //      itemsDesktopSmall : [900,1],
         //      itemsTablet: [600,1], 
         //      itemsMobile : false 
               
           });
         });    
      </script> 
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script> 
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
   </body>


</html>
