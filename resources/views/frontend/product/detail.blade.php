@extends('frontend.layout.app')
@section('customCSS')
<style>
    /* Image animation */
    .cbp-item .work-image{-webkit-transform:scale(1);transform:scale(1); -webkit-transition:transform 0.5s;transition:transform 0.5s;}
    .cbp-item:hover .work-image{-webkit-transform:scale(1.03);transform:scale(1.03);}
    /* Details animation */
    .cbp-item .details{opacity:0;-webkit-transform:scale(1.04) perspective(1000px);transform:scale(1.04) perspective(1000px);-webkit-transition:all 0.5s;transition:all 0.5s;}
    .cbp-item:hover .details{opacity:1;-webkit-transform:scale(1) perspective(1000px);transform:scale(1) perspective(1000px);}
    /* Texts and line animations */
    .cbp-item .details .title, .cbp-item .details .tag{opacity:0;-webkit-transform:translateY(15px);transform:translateY(15px);-webkit-transition:all 0.5s;transition:all 0.5s;}
    .cbp-item:hover .details .title, .cbp-item:hover .details .tag{opacity:1;-webkit-transform:translateY(0px);transform:translateY(0px);}
    .cbp-item:hover .details .tag{-webkit-transition-delay:0.1s;transition-delay:0.1s;}
    .cbp-item .details .line{-webkit-transition:all 0.3s;transition:all 0.3s;}
    .cbp-item:hover .details .line{width:70px!important;}

    /* Dots Navigation */
    .dots-circle .cbp-nav-pagination{bottom:-60px;}
    .dots-circle .cbp-nav-pagination .cbp-nav-pagination-item{width:25px;height:25px;background-color:transparent;border-radius:50%;display:inline-flex;display:-ms-inline-flexbox;justify-content:center;-ms-flex-pack:center;align-items:center;-ms-flex-align:center;}
    .dots-circle .cbp-nav-pagination .cbp-nav-pagination-item:before{width:5px;height:5px;background-color:#222;box-shadow:inset 0 0 0 0.5px transparent;-webkit-transform:scale(1);transform:scale(1);content:'';display: block;border-radius:inherit;-webkit-transition:all 0.5s;transition:all 0.5s;}
    .dots-circle .cbp-nav-pagination .cbp-nav-pagination-item.cbp-nav-pagination-active:before{box-shadow:inset 0 0 0 0.5px #222;background-color:transparent!important;-webkit-transform:scale(3);transform:scale(3);}

    /* Dots Navigation */
    .cbp-nav-controls{position:absolute;left:0;top:0;z-index:100;width:100%;height:100%;pointer-events:none;}
    .cbp-nav-controls div{font-size:20px;color:white;border-radius:0;background:rgba(24,24,24,0.3);position:absolute;top:50%;width:40px;height:90px;left:0;opacity:0;z-index:5;cursor:pointer;pointer-events:all;display:inline-flex;display:-ms-inline-flexbox;justify-content:center;-ms-flex-pack:center;align-items:center;-ms-flex-align:center;-webkit-transform:translateY(-50%);transform:translateY(-50%);-webkit-transition:all 0.5s;-moz-transition:all 0.5s;transition:all 0.5s;}
    .cbp:hover .cbp-nav-controls div{opacity:.55;}
    .cbp-nav-controls div.cbp-nav-next{left:auto;right:1px;}
    .cbp-nav-controls div:before,.cbp-nav-controls div:after{content:"\e64a";display:inline-flex;display:-ms-inline-flexbox;z-index:2;font-family:'themify';color:inherit;-webkit-transition:all 0.5s;-moz-transition:all 0.5s;transition:all 0.5s;}
    .cbp-nav-controls div:after{display:none;content:'';z-index:0;}
    .cbp:hover .cbp-nav-controls div:hover{opacity:1;}
    .cbp-nav-controls div.cbp-nav-next:before{content:"\e649";}
</style>
@endsection
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
                <a href="{{ route('home')}}">{{ __('site.yatlar')}}</a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="#" class="stay c-default opacity-7">{{ __('site.hizmetlerimiz')}}</a>
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
<div class="container mb-50 mt-20">
    <div class="row">

        <div class="col-md-4 col-12">
            <div class="card">
                <div class="card-header">Featured</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
              </div>
        </div>

    </div>
  
</div>
<div class="container mb-50 mt-20">
    <div id="gallery-items" class="lightbox_gallery">
        @foreach ($Detay->getMedia('gallery') as $item)
            <a href="{{ $item->getUrl() }}" class="cbp-item has-overlay-hover scale-hover-container">
                <div class="work-image">
                   <img src="{{ $item->getUrl() }}" alt="{{ 'İstanbul Özel Yat Kiralama - '.  $Detay->title }}"> 
                </div>
                <div class="zi-5 overlay-hover slow bg-blur bg-soft-dark5 flex-column t-center">
                    <i class="ti-more white fs-22"></i>
                </div>
            </a>
        @endforeach
    </div>
</div>

@endsection

@section('customJS')
<script>
    (function($, window, document, undefined) {
        'use strict';
        $('#gallery-items').cubeportfolio({
            mediaQueries: [{
                width: 992,
                cols: 3,
            }, {
                width: 640,
                cols: 3,
            }, {
                width: 480,
                cols: 2,
            }],
            gapHorizontal: 5,
            gapVertical: 5,
            displayTypeSpeed: 0,
        });

    })(jQuery, window, document);
</script>
@endsection