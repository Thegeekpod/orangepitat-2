@extends('frontend.main.layout')
@section('content')
    <div class="inner-banner">
        <div class="banner-caption">
            <h1 data-aos="fade-up" data-aos-duration="3000">Gallery</h1>
        </div>
        <img src="{{ asset('frontend/images/contact-us.png') }}">
    </div>

    <div class="container gallery-wrap">
        <div class="row">
            <div class="Inner-gallery" data-aos="fade-up" data-aos-duration="1000">
                @foreach ($galleryImages as $galleryImage)
                    <a class="mklbItem" href="{{ asset('storage/ProjectImages/' . $galleryImage->image) }}" data-fancybox="gallery">
                        <img src="{{ asset('storage/ProjectImages/' . $galleryImage->image) }}" alt="Gallery Image 1">
                    </a>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Include jQuery 3.3.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include FancyBox CSS and JS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <!-- Initialize FancyBox -->
    <script>
        $(document).ready(function() {
            $('[data-fancybox="gallery"]').fancybox();
        });
    </script>
@endsection
