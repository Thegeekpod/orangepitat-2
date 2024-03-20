@extends("frontend.main.layout")
@section("content")
<div class="inner-banner">
         <div class="banner-caption">
            <h1>Explore The Worlds</h1>
            <h6>People Don’t Take, Trips Take People</h6>
         </div>
         <img src="{{asset('frontend/images/service-details.jpg')}}">
      </div>
      <section class="side-screen-wrap">
         <div class="container">
            <div class="row">
               <div class="side-scree-slider">
                  <div id="tourdetailsslider" class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="nature-image">
                           <img src="{{asset('frontend/images/slider-1.jpg')}}">
                        </div>
                     </div>
                     <div class="item">
                        <div class="nature-image">
                           <img src="{{asset('frontend/images/slider-2.jpg')}}">
                        </div>
                     </div>
                     <div class="item">
                        <div class="nature-image">
                           <img src="{{asset('frontend/images/slider-3.jpg')}}">
                        </div>
                     </div>
                     <div class="item">
                        <div class="nature-image">
                           <img src="{{asset('frontend/images/slider-3.jpeg')}}">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <h1 class="post-title">
                     {{$package->name}}
                  </h1>
                  <div class="gowilds-single-address">
                     <i class="fa-solid fa-location-dot"></i>
                     <span>{{$package->location->location}}</span>
                  </div>
               </div>
               <div class="col-md-6">
                  <ul class="tour-basic-details">
                     <li>
                        <div class="details-icon">
                           <i class="fa-regular fa-money-bill-1"></i>
                        </div>
                        <div class="details-box-content">
                           <span>Price</span>
                           <h4>{{$package->price}}</h4>
                        </div>
                     </li>
                     <li>
                        <div class="details-icon">
                           <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="details-box-content">
                           <span>Duration</span>
                           <h4>{{$package->duration}}</h4>
                        </div>
                     </li>
                    <!--  <li>
                        <div class="details-icon">
                           <i class="fa-solid fa-plane"></i>
                        </div>
                        <div class="details-box-content">
                           <span>Tour Type</span>
                           <h4>Tent Camping</h4>
                        </div>
                     </li> -->
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <div class="container-fluid tour-details-wrap">
         <div class="row">
            <div class="col-md-8">
               <div class="tour-details">
                  {!! $package->description !!}
                  {{-- <h1>Explore Tours</h1>
                  <p>Sed ut perspiciatis unde omniste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ip quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit.</p>
                  <div class="row facilities">
                     <div class="col-md-6">
                        <h3>Facilities</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <h3>Challenge</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore quasi architecto beatae vitae dicta.</p>
                     </div>
                     <div class="col-md-6">
                        <img src="{{asset('frontend/images/gallery-04.jpg')}}">
                     </div>
                  </div> --}}
                  <div class="row included-exclude">
                     <div class="col-md-6">
                        <h3>Included</h3>
                        <ul>
                           {!! $package->included !!}
                           {{-- <li><i class="fa-solid fa-check"></i> <span>Pick and Drop Services</span></li>
                           <li><i class="fa-solid fa-check"></i> <span>1 Meal Per Day</span></li>
                           <li><i class="fa-solid fa-check"></i> <span>Cruise Dinner & Music Event</span></li>
                           <li><i class="fa-solid fa-check"></i> <span>Visit 7 Best Places in the City With Group</span></li> --}}
                        </ul>
                     </div>
                     <div class="col-md-6">
                        <h3>exclude</h3>
                        <ul>
                           {!! $package->excluded !!}
                           {{-- <li><i class="fa-solid fa-xmark"></i> <span>Pick and Drop Services</span></li>
                           <li><i class="fa-solid fa-xmark"></i> <span>1 Meal Per Day</span></li>
                           <li><i class="fa-solid fa-xmark"></i> <span>Cruise Dinner & Music Event</span></li>
                           <li><i class="fa-solid fa-xmark"></i> <span>Visit 7 Best Places in the City With Group</span></li> --}}
                        </ul>
                     </div>
                  </div>
                  <hr>
                  <div class="row amenities">
                     <div class="col-md-12">
                        <h1>Tour Amenities</h1>
                        <ul>
                           <li><i class="fa-solid fa-money-bill"></i> <span>Accepts Credit Cards</span></li>
                           <li><i class="fa-solid fa-ticket"></i> <span>Free Coupons</span></li>
                           <li><i class="fa-solid fa-chair"></i> <span>Outdoor Seating</span></li>
                           <li><i class="fa-solid fa-utensils"></i> <span>Restaurant</span></li>
                           <li><i class="fa-solid fa-smoking"></i> <span>Smoking Allowed</span></li>
                           <li><i class="fa-solid fa-wifi"></i> <span>Wireless Internet</span></li>
                        </ul>
                     </div>
                  </div>
                  <hr>
                  <div class="row accordion-wrap">
                     <div class="col-md-12">
                        <h1>Tour Plan</h1>
                        <div class="accordion">
                           <div class="accordion-item">
                              <button id="accordion-button-1" aria-expanded="false">
                              <span class="accordion-title"><span class="badge badge-secondary">Day 1</span>Why choose ALPEN ORTHOPEDICS?</span>
                              <span class="icon" aria-hidden="true"></span>
                              </button>
                              <div class="accordion-content">
                                 <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                                    Ut tortor pretium viverra suspendisse potenti.
                                 </p>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <button id="accordion-button-2" aria-expanded="false">
                              <span class="accordion-title"><span class="badge badge-secondary">Day 2</span> Is ALPEN ORTHOPEDICS for me?</span>
                              <span class="icon" aria-hidden="true"></span>
                              </button>
                              <div class="accordion-content">
                                 <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                                    Ut tortor pretium viverra suspendisse potenti.
                                 </p>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <button id="accordion-button-3" aria-expanded="false">
                              <span class="accordion-title"><span class="badge badge-secondary">Day 3</span> What Makes treatment at ALPEN ORTHOPEDICS Different?</span>
                              <span class="icon" aria-hidden="true"></span>
                              </button>
                              <div class="accordion-content">
                                 <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                                    Ut tortor pretium viverra suspendisse potenti.
                                 </p>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <button id="accordion-button-4" aria-expanded="false">
                              <span class="accordion-title"><span class="badge badge-secondary">Day 4</span> Does ALPEN ORTHOPEDICS Treat My Condition?</span>
                              <span class="icon" aria-hidden="true"></span>
                              </button>
                              <div class="accordion-content">
                                 <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                                    Ut tortor pretium viverra suspendisse potenti.
                                 </p>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <button id="accordion-button-5" aria-expanded="false">
                              <span class="accordion-title"><span class="badge badge-secondary">Day 5</span> Customized Treatment for Each Patients.</span>
                              <span class="icon" aria-hidden="true"></span>
                              </button>
                              <div class="accordion-content">
                                 <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                                    Ut tortor pretium viverra suspendisse potenti.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="booking-form">
                  <div class="tour-total-price">
                     <h5>Package Starting From</h5>
                     <h1>₹ 25,618</h1>
                  </div>
                  <hr>
                  <h4>Booking Tour</h4>
                  <div class="row">
                     <div class="col-md-6">
                        <input type="text" name="" placeholder="Full Name">
                     </div>
                     <div class="col-md-6">
                        <input type="number" name="" placeholder="Phone number">
                     </div>
                     <div class="col-md-12">
                        <input type="email" name="" placeholder="Email ID">
                     </div>
                     <div class="col-md-6">
                        <input type="date" name="" placeholder="From date">
                     </div>
                     <div class="col-md-6">
                        <input type="date" name="" placeholder="to date">
                     </div>
                     <div class="col-md-12">
                        <button class="submit-btn">Book Now</button>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
@endsection
