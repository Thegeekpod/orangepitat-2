@extends("frontend.main.layout")
@section("content")

<div class="inner-banner">
         <div class="banner-caption">
            <h1>location</h1>
         </div>
         <img src="{{asset('frontend/images/about-banner.jpg')}}">
      </div>
      

<div class="row packages-panel pt-5" style='    padding: 50px;'>
   <div class="container">
   <div class="col-md-4">
        <div class="packages-box">
                  <div class="packages-box-images">
                     <img src="{{asset('frontend/images/packages-2.png')}}">
                  </div>
                  <h5>Andaman and Nicobar Islands</h5>
                  <ul class="packages-action">
                     <li><i class="fa-solid fa-location-dot"></i><span> India</span></li>
                     <li><a href="packages.html" class="packages-btn">View Packages</a></li>
                  </ul>
      </div>
   </div>
   <div class="col-md-4">
       <div class="packages-box">
                  <div class="packages-box-images">
                     <img src="{{asset('frontend/images/packages-3.png')}}">
                  </div>
                  <h5>The Best of North East</h5>
                  <ul class="packages-action">
                     <li><i class="fa-solid fa-location-dot"></i><span> India</span></li>
                     <li><a href="packages.html" class="packages-btn">View Packages</a></li>
                  </ul>
               </div>
   </div>

   <div class="col-md-4">
       <div class="packages-box">
                  <div class="packages-box-images">
                     <img src="{{asset('frontend/images/packages-1.png')}}">
                  </div>
                  <h5>The Best of BANGKOK – PATTAYA</h5>
                  <ul class="packages-action">
                     <li><i class="fa-solid fa-location-dot"></i><span> Thailand</span></li>
                     <li><a href="packages.html" class="packages-btn">View Packages</a></li>
                  </ul>
               </div>
   </div>
   </div>
</div>

@endsection
