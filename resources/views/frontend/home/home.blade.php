@extends('frontend.main.layout')
@section('content')
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <img src="{{ asset('frontend/images/banner-effect.png') }}" alt="Banner Effect" class="banner-effect">
        <!-- Wrapper for slides -->
        <div class="carousel-inner banner-sec" role="listbox">
            <div class="item active">
                <img src="{{ asset('frontend/images/banner.png') }}" alt="banner-1">
                <div class="carousel-caption">
                    <h1>Plan Your <br> <span class="text-color">Travel</span> Now!</h1>
                    <p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation
                        packages, search cheap hotels and events.</p>
                    <a href="#" class="banner-book-btn">Book Now</a>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('frontend/images/banner.png') }}" alt="banner-1">
                <div class="carousel-caption">
                    <h1>Plan Your <br> <span class="text-color">Travel</span> Now!</h1>
                    <p>Experience the various exciting tour and travel packages and Make hotel reservations, find vacation
                        packages, search cheap hotels and events.</p>
                    <a href="#" class="banner-book-btn">Book Now</a>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container service-category-wrap">
        <div class="row">
            <div class="col-md-3">
                <div class="service-category-box" data-aos="fade-up" data-aos-duration="3000">
                    <img src="{{ asset('frontend/images/tour.png') }}">
                    <h3>Tour</h3>
                    <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-category-box" data-aos="fade-up" data-aos-duration="3000">
                    <img src="{{ asset('frontend/images/flight.png') }}">
                    <h3>Flight</h3>
                    <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-category-box" data-aos="fade-up" data-aos-duration="3000">
                    <img src="{{ asset('frontend/images/car-rental.png') }}">
                    <h3>Car Rentals</h3>
                    <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-category-box" data-aos="fade-up" data-aos-duration="3000">
                    <img src="{{ asset('frontend/images/hotel.png') }}">
                    <h3>Hotel</h3>
                    <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container Packages-sec">
        <div class="sec-header" data-aos="fade-up" data-aos-duration="3000">
            <h1>Top <span class="text-color">Tour Packages</span></h1>
            <p> Explore our top destinations voted by more than 100,000+ customers around the world.</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="3000">
            <div id="Packages" class="owl-carousel owl-theme">
                @foreach ($locations as $item)
                <div class="item">
                    <div class="packages-box">
                        <div class="packages-box-images">
                            <img src="{{ asset($item->image) }}">
                        </div>
                        <h5>{{$item->title}}</h5>
                        <ul class="packages-action">
                            <li><i class="fa-solid fa-location-dot"></i><span> {{$item->title}}</span></li>
                            <li><a href="{{route('packages',['slug' => $item->slug ])}}" class="packages-btn">View Packages</a></li>
                        </ul>
                    </div>
                </div>
                @endforeach
                {{-- <div class="item">
                    <div class="packages-box">
                        <div class="packages-box-images">
                            <img src="{{ asset('frontend/images/packages-2.png') }}">
                        </div>
                        <h5>Andaman and Nicobar Islands</h5>
                        <ul class="packages-action">
                            <li><i class="fa-solid fa-location-dot"></i><span> India</span></li>
                            <li><a href="#" class="packages-btn">View Packages</a></li>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <div class="packages-box">
                        <div class="packages-box-images">
                            <img src="{{ asset('frontend/images/packages-3.png') }}">
                        </div>
                        <h5>The Best of North East</h5>
                        <ul class="packages-action">
                            <li><i class="fa-solid fa-location-dot"></i><span> India</span></li>
                            <li><a href="#" class="packages-btn">View Packages</a></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <section class="service-wrap">
        <div class="container">
            <div class="sec-header">
                <h1>Our <span class="text-color">Hotel</span></h1>
                <p> Explore our top destinations voted by more than 100,000+ customers around the world.</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="services" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="packages-box hotel-box">
                                <div class="packages-box-images">
                                    <img src="{{ asset('frontend/images/hotel-1.png') }}">
                                </div>
                                <span><i class="fa-solid fa-location-dot"></i> Tajpur, West Bengal, India</span>
                                <h5>LA MACAW RESORT, TAJPUR</h5>
                                <ul class="packages-action hotel-action">
                                    <li><span> ₹ 3,000</span></li>
                                    <li><u><a href="#" class="packages-btn">View Details <i
                                                    class="fa-solid fa-angles-right"></i></a></u></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="packages-box hotel-box">
                                <div class="packages-box-images">
                                    <img src="{{ asset('frontend/images/hotel-1.png') }}">
                                </div>
                                <span><i class="fa-solid fa-location-dot"></i> Tajpur, West Bengal, India</span>
                                <h5>LA MACAW RESORT, TAJPUR</h5>
                                <ul class="packages-action hotel-action">
                                    <li><span> ₹ 3,000</span></li>
                                    <li><u><a href="#" class="packages-btn">View Details <i
                                                    class="fa-solid fa-angles-right"></i></a></u></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="packages-box hotel-box">
                                <div class="packages-box-images">
                                    <img src="{{ asset('frontend/images/hotel-1.png') }}">
                                </div>
                                <span><i class="fa-solid fa-location-dot"></i> Tajpur, West Bengal, India</span>
                                <h5>LA MACAW RESORT, TAJPUR</h5>
                                <ul class="packages-action hotel-action">
                                    <li><span> ₹ 3,000</span></li>
                                    <li><u><a href="#" class="packages-btn">View Details <i
                                                    class="fa-solid fa-angles-right"></i></a></u></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="packages-box hotel-box">
                                <div class="packages-box-images">
                                    <img src="{{ asset('frontend/images/hotel-1.png') }}">
                                </div>
                                <span><i class="fa-solid fa-location-dot"></i> Tajpur, West Bengal, India</span>
                                <h5>LA MACAW RESORT, TAJPUR</h5>
                                <ul class="packages-action hotel-action">
                                    <li><span> ₹ 3,000</span></li>
                                    <li><u><a href="#" class="packages-btn">View Details <i
                                                    class="fa-solid fa-angles-right"></i></a></u></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="packages-box hotel-box">
                                <div class="packages-box-images">
                                    <img src="{{ asset('frontend/images/hotel-1.png') }}">
                                </div>
                                <span><i class="fa-solid fa-location-dot"></i> Tajpur, West Bengal, India</span>
                                <h5>LA MACAW RESORT, TAJPUR</h5>
                                <ul class="packages-action hotel-action">
                                    <li><span> ₹ 3,000</span></li>
                                    <li><u><a href="#" class="packages-btn">View Details <i
                                                    class="fa-solid fa-angles-right"></i></a></u></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="offer">
        <div class="container">
            <div class="row">
                <h2 data-aos="fade-right" data-aos-duration="3000">Discover Special Deals!</h2>
                <h1 data-aos="fade-left" data-aos-duration="3000">Get <span class="text-color">15% Off</span> </h1>
                <p data-aos="fade-up" data-aos-duration="3000"><i>Make sure to check out these special promotions...</i>
                </p>
            </div>
            <ul class="hotel-futures" data-aos="fade-up" data-aos-duration="2000">
                <li>
                    <img src="{{ asset('frontend/images/wifi.png') }}">
                    <h3>Free Wifi</h3>
                </li>
                <li>
                    <img src="{{ asset('frontend/images/breakfast.png') }}">
                    <h3>Breakfast</h3>
                </li>
                <li>
                    <img src="{{ asset('frontend/images/swiming-pool.png') }}">
                    <h3>Pool</h3>
                </li>
                <li>
                    <img src="{{ asset('frontend/images/tv.png') }}">
                    <h3>Television</h3>
                </li>
            </ul>
            <a href="#" class="see-Packages-btn" data-aos="fade-up" data-aos-duration="1000">see our Packages</a>
        </div>
    </section>
    <div class="container-fluid about-sec">
        <div class="row">
            <div class="col-md-6">
                <div class="about-content" data-aos="fade-left" data-aos-duration="3000">
                    <div class="sec-header">
                        <h1>About <span class="text-color">orangepetal</span></h1>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisng elit. Donec eleifend finibus facilisis. Pellentesque
                        lobortis mi mauris, id e quam fringilla eget. Donec massa ante, maximus quis condimentum in,
                        convallis id stiam varius vitae diam non blandit. Donec rhoncus enim non imperdiet suscipitoin eget
                        volupat quam, vel vehicula risus. Integer euismod varius justo, quis porttitor odio sollicitudi in.
                        Mauris imperdiet vulputate pharetra. Sed nec suscipit nibh, a vehicula arcu. Vivamunon urna nec
                        mauris molestie interdum sed ut leo. Mauris cursus risus ut nulla tristique molestie. In tempor
                        sollicitudin tellus, at tempus diaod non. </p>
                    <p>Pellentesque rutrum orci rhoncus, ferm nibh quis, ornare lacus. Maecenas scelerisque cursus enim at
                        tempor. Phasellus nec faucibus, efficitur urna in, vulputate nisl. Nullam et aliquam massa,
                        hendrerit fauus nisi. Nulla facilisi. Aenean id nibh tempus, tincidunt magna eget, tincidunt ipm ut
                        sapien felis. Duis malesuada nunc tortor, id feugiat dolor dapibus sit amet. </p>
                    <a href="#" class="read-more-btn">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-image" data-aos="fade-right" data-aos-duration="3000">
                    <img src="{{ asset('frontend/images/home-about.png') }}">
                </div>
            </div>
        </div>
    </div>
    <section class="testimonials-sec">
        <div class="sec-header">
            <h1 data-aos="fade-right" data-aos-duration="3000">What Our <span class="text-color">Clients Says</span></h1>
        </div>
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="3000">

                <div class="testimonials-box">
                    <div id="Testimonials" class="owl-carousel owl-theme">
                        @foreach ($testimonials as $testimonial)
                            <div class="item">
                                <div class="feedback">
                                    <img src="{{ asset('frontend/images/comma.png') }}" class="comma">
                                    <p>
                                        {{ $testimonial->text }}
                                    </p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="feedback-profile">
                                                @if (!empty($testimonial->image))
                                                    <img src="{{ asset('storage/TestiImage/' . $testimonial->image) }}">
                                                @else
                                                    <img src="{{ asset('frontend/images/profile.jpg') }}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="profile-details">
                                                <strong>{{ $testimonial->title }}</strong>
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                                <small>{{ $testimonial->position }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
