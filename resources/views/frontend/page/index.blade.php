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
                <a href="#" class="stay c-default opacity-7">{{ __('site.kurumsal')}}</a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="#" class="stay c-default opacity-7">{{ $Detay->title }}</a>
            </div>
        </div>
    </div>
</section>

@if($Detay->desc != null)
<div id="elementDescription" class="container py-50">
    <span class="fs-16 fs-16-sm gray7 ls-0 lh-35 light">
        {!! $Detay->desc !!}
    </span>
</div>
@endif

<section id="portfolio-grid" class="pb-60 pt-50 bt-1 b-gray1 b-solid lightbox_gallery">
    <div class="container ">
        <div id="portfolio-items" class="">
            @foreach ($Detay->getMedia('gallery') as $item)
            <a href="{{ $item->getUrl() }}" class="cbp-item art photography d-block has-overlay-hover">
                <div class="work-image">
                    <img src="/front/images/image_loader.svg" data-cbp-src="{{ $item->getUrl() }}" 
                    width="500" height="500" alt="{{ $Detay->title}}" class="mb-70">
                    <div class="overlay-hover bg-soft-dark4 d-flex align-items-center justify-content-center scale-hover-container slow">
                        <i class="ti-plus fs-20 white scale-hover"></i>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('customJS')
<script>
    (function($, window, document, undefined) {
        'use strict';
        $('#portfolio-items').cubeportfolio({
            mediaQueries: [{
                width: 992,
                cols: 4,
            }, {
                width: 640,
                cols: 2,
            }, {
                width: 480,
                cols: 1,
            }],
            filters: '.filter-tags',
            defaultFilter: '*',
            layoutMode: 'masonry',
            gridAdjustment: 'responsive',
            gapHorizontal: 10,
            gapVertical: 10,
            caption: 'none',
            animationType: 'quicksand',
            displayType: 'none',
            displayTypeSpeed: 0,
        });


    })(jQuery, window, document);
</script>
    
@endsection