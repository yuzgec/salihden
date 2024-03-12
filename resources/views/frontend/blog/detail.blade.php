@extends('frontend.layout.app')
@section('content')
<section id="home" class="relative white height-20vh height-20vh-sm mnh-450 align-items-center d-flex">
    <div class="videobg bg-soft bg-soft-dark2" data-background="images/videos/video-2-poster.jpg">
        <video poster="images/videos/video-2-poster.jpg" playsinline autoplay muted loop>
            <source src="/istanbul.mp4" type="video/mp4">
        </video>
    </div>

    <div class="container-md">
        <div class="t-center mt-25">
            <h5 class="fs-11 ls-4 semibold white uppercase">{{ __('site.firma')}}</h5>
            <h1 class="mt-15 font-secondary lh-md"> {{ $Detay->title }}</h1>
            <div class="mt-30 uppercase fs-12 bold bg-soft-dark3 radius-lg py-10 px-40 d-inline-flex width-auto lh-normal align-items-center">
                <a href="{{ route('home')}}"><i class="ti-home"></i></a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="{{ route('home')}}">{{ __('site.anasayfa')}}</a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="#" class="stay c-default opacity-7">Blog</a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="#" class="stay c-default opacity-7">{{ $Detay->title }}</a>
            </div>
        </div>
    </div>
</section>

<div id="entry" class="py-50 blog classic">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                {{-- <div class="bg-white">
                    <div id="image-slider-81239512" class="custom-slider dots-point dots-inner arrows-long controls-mouseover block-img c-move lightbox_gallery" 
                        data-slick='{"dots": true, "speed":500, "arrows": true, "fade": true, "draggable":true, "slidesToShow": 1, "slidesToScroll": 1}'>
                        <div>
                            <img src="images/blog/post_large_slider_loader.svg" data-lazy="images/blog/post_large_slider_02.jpg" alt="blog post image gallery template" class="bs-lg">
                        </div>
                        <div>
                            <img src="images/blog/post_large_slider_loader.svg" data-lazy="images/blog/post_large_slider_03.jpg" alt="blog post image gallery template" class="bs-lg">
                        </div>
                        <div>
                            <img src="images/blog/post_large_slider_loader.svg" data-lazy="images/blog/post_large_slider_04.jpg" alt="blog post image gallery template" class="bs-lg">
                        </div>
                    </div>
                </div> --}}
                <article class="fs-20 fs-18-sm gray8 lh-35 lh-30-sm px-50 px-15-sm py-70 py-50-sm bg-white">
                    {!! $Detay->desc !!}
                </article>
            </div>
       
        </div>
    </div>
</div>

@endsection
