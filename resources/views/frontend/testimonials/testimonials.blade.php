@extends('frontend.main.layout')
@section('content')
    <div class="inner-banner">
        <div class="banner-caption">
            <h1 data-aos="fade-up" data-aos-duration="1000">What Our Customers Are Saying</h1>
        </div>
        <img src="{{ asset('frontend/images/about-banner.jpg') }}">
    </div>
    <div class="container testimonials-wrap">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('frontend/images/testimonail.jpg') }}" data-aos="fade-left" data-aos-duration="2000">
            </div>
            <div class="col-md-6">
                <div class="testimonials-intro" data-aos="fade-right" data-aos-duration="3000">
                    <h3>help Us Improve our Productivity</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. </p>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container inner-testimonials-box">
        <div class="row">
            @foreach ($testimonials as $testimonial)
                <div class="col-md-4">
                    <div class="feedback" data-aos="fade-up" data-aos-duration="1000">
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
@endsection
