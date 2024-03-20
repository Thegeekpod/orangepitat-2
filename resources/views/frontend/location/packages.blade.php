@extends("frontend.main.layout")
@section("content")

<div class="inner-banner">
         <div class="banner-caption">
            <h1>Packages</h1>
         </div>
         <img src="{{asset('frontend/images/about-banner.jpg')}}">
      </div>
      <section class="tour-place-wrap">
         <div class="container">
            <div class="row">
               @foreach($packages as $package)
               <div class="col-md-4">
                  <div class="booking-one__single ba-block-item">
                     <div class="booking-one__wrap">
                        <div class="booking-one__image">
                           <img src="{{asset($package->image)}}">
                        </div>
                        <div class="booking-one__content">
                           <div class="booking-one__content-top">
                             
                           </div>
                           <h3 class="booking-one__title">
                              <a href="#">{{$package->name}}</a>
                           </h3>
                           <div class="booking-one__address">
                              <i class="fas fa-map-marker-alt"></i><span>{{$package->location->location}}</span>
                           </div>
                           <div class="booking-one__price booking__price"><label><i class="fa-solid fa-circle-dollar-to-slot"></i>From</label><span class="item_info_price_new"><span class="currency_amount" data-amount="109"><span class="currency_symbol">$</span>{{$package->price}}</span></span></div>
                           <div class="booking-one__meta">
                              <div class="booking-one__meta-left">
                                 <span class="booking-one__item-days booking-one__item-meta"><i class="fa-regular fa-clock"></i><span>{{$package->duration}} days</span></span>          
                              </div>
                              <div class="booking-one__meta-right">
                                 <a href="{{ route('tour-packages-details',['slug' => $package->slug])}}">Explore <i class="fa-solid fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
               {{-- <div class="col-md-4">
                  <div class="booking-one__single ba-block-item">
                     <div class="booking-one__wrap">
                        <div class="booking-one__image">
                           <img src="{{asset('frontend/images/gallery-02.jpg')}}">
                        </div>
                        <div class="booking-one__content">
                           <div class="booking-one__content-top">
                              
                           </div>
                           <h3 class="booking-one__title">
                              <a href="#">Man Standing on a Rock</a>
                           </h3>
                           <div class="booking-one__address">
                              <i class="fas fa-map-marker-alt"></i><span>Main Street, Brooklyn, NY</span>
                           </div>
                           <div class="booking-one__price booking__price"><label><i class="fa-solid fa-circle-dollar-to-slot"></i>From</label><span class="item_info_price_new"><span class="currency_amount" data-amount="109"><span class="currency_symbol">$</span>109.00</span></span></div>
                           <div class="booking-one__meta">
                              <div class="booking-one__meta-left">
                                 <span class="booking-one__item-days booking-one__item-meta"><i class="fa-regular fa-clock"></i><span>3 days</span></span>       
                              </div>
                              <div class="booking-one__meta-right">
                                 <a href="tour-packages-details.html">Explore <i class="fa-solid fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="booking-one__single ba-block-item">
                     <div class="booking-one__wrap">
                        <div class="booking-one__image">
                           <img src="{{asset('frontend/images/gallery-03.jpg')}}">
                        </div>
                        <div class="booking-one__content">
                           <div class="booking-one__content-top">
                              
                           </div>
                           <h3 class="booking-one__title">
                              <a href="#">Cottages In The Middle Of Beach</a>
                           </h3>
                           <div class="booking-one__address">
                              <i class="fas fa-map-marker-alt"></i><span>Main Street, Brooklyn, NY</span>
                           </div>
                           <div class="booking-one__price booking__price"><label><i class="fa-solid fa-circle-dollar-to-slot"></i>From</label><span class="item_info_price_new"><span class="currency_amount" data-amount="109"><span class="currency_symbol">$</span>109.00</span></span></div>
                           <div class="booking-one__meta">
                              <div class="booking-one__meta-left">
                                 <span class="booking-one__item-days booking-one__item-meta"><i class="fa-regular fa-clock"></i><span>3 days</span></span>         
                              </div>
                              <div class="booking-one__meta-right">
                                 <a href="tour-packages-details.html">Explore <i class="fa-solid fa-arrow-right-long"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> --}}

            </div>
         </div>
      </section>
@endsection
