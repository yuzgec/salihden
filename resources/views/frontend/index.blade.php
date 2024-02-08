@extends('frontend.layout.app')
@section('customCSS')
    <link rel="stylesheet" href="/frontend/css/revolutionslider/settings.css" />
    <style>
        .portfolio-items, .portfolio-items .cbp-wrapper-outer, .portfolio-items .cbp-item{overflow:visible;}
        .portfolio-items .cbp-item:hover{z-index: 150;}
        .portfolio-items .cbp-item .keeper{
            -webkit-transition: box-shadow 0.5s cubic-bezier(0.77, 0, 0.2, 1);
            transition: box-shadow 0.5s cubic-bezier(0.27, 0, 0.2, 1);
        }
        .portfolio-items .cbp-item:hover .keeper{
            box-shadow: 0 62px 70px -14px rgba(0,0,0,0.23);
        }
    </style>
@endsection
@section('content')

    @include('frontend.layout.slider')

    <section id="element-template-01" class="py-50 bt-1 bg-dark b-solid">
        <div class="container">
            <h4 class="text-center text-white">{{ __('site.firmaadi')}} </h4>
            <h2 class="text-center text-white fs-50 uppercase">{{ __('site.odullerimiz')}}</h2>
        
            <div id="image-slider-container" class="mt-50 mt-50-sm o-hidden-x mxw-full">
                <div id="image-slider" class="custom-slider fw-slider container block-img dots-circle c-resize" 
                    data-slick='{"dots": true, "centerMode": true, "speed":600, "arrows": true, "fade": false, "draggable":true, "slidesToShow": 3, "slidesToScroll": 3}'>
                    @foreach ($Odullerimiz->getMedia('gallery') as $item)
                        <div class="px-15 px-5-sm">
                            <img src="/frontend/images/loader2.svg" 
                            data-lazy="{{ $item->getUrl() }}" alt="Denden Yatçılık - Ödüllerimiz" 
                            class="bs-lg">
                        </div>
                    @endforeach
                </div>
                <div class="mt-30 container t-center">
                    <a href="{{ route('corporatedetail', $Odullerimiz->slug)}}" target="_blank" class="lg-btn inline-block mt-30 bg-colored bg-colored1-hover white fs-11 bold uppercase slow-sm">
                        {{ __('site.hepsinigor')}}
                    </a>
                </div>
            </div>
        </div>
    </section>


<div class="relative z-index-1 py-250">
    <div
        class="videobg loaded"
        data-background="images/videos/video-2-poster.jpg"
        style="background-image: url('images/videos/video-2-poster.jpg');">
        <video
            poster="images/videos/video-2-poster.jpg"
            playsinline=""
            autoplay=""
            muted=""
            loop="">
            <source src="images/videos/video-2.webm" type="video/webm">
                <source src="/istanbul.mp4" type="video/mp4"></video>
            </div>
            <div class="relative zi-1">
                <h2 class="t-center white bold fs-40">{{ __('site.anasayfa_slogan') }}</h2>
            </div>
        </div>

    <div id="portfolio-grid" class="pb-120 pt-90" style="background: url('/back.jpg')">
        <div class="container">
            <h4 class="text-center text-white">{{ __('site.yatlar')}} </h4>
            <h2 class="text-center text-white fs-50">{{ __('site.firmaadi')}}</h2>
            <p class="text-center text-white">{{ __('site.yatlar_altmetin_1')}}
                <br> {{ __('site.yatlar_altmetin_2')}}
            </p>
         
            <div id="portfolio-items" class="portfolio-items mt-40">
                @foreach ($Product as $item)
                <a href="{{ route('productdetail',  $item->slug)}}" class="cbp-item fashion photography">
                    <div class="keeper bg-white opacity-hover-container">
                        <div class="work-image">
                            <img src="/frontend/images/loader2.svg"  
                            data-cbp-src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}"
                             width="700" height="478" alt="Denden Yatçılık - {{ $item->title}}">
                        </div>
                        <div class="details px-30 py-30">
                            <h3 class="fs-18 mt-5 dark5 lh-normal">{{ $item->title}} </h3>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>

    </div>


    <div class="container mt-20 d-none d-sm-block">
        <h4 class="text-center text-dark">{{ __('site.rota1')}}</h4>
        <h2 class="text-center text-dark fs-50 uppercase">{{ __('site.rota2')}}</h2>
        <p class="text-center text-dark">{{ __('site.rota3')}} </p>
        <div id="hotspots1" class="hotspots">
            <img src="images/blocks/block_loader.svg" data-src="/map.jpg" alt="Kiralık Tekneler - İstanbul Boğazı" class="mb-50">
            <div class="items">
                <div style="left:41%; top:38%;" class="item animated fast" data-animation="zoomInReverse" data-animation-delay="200">
                    <div class="width-25 width-25-sm height-25 height-25-sm icon-animated circle bg-success active-inview"
                    data-bs-toggle="popover"
                    data-bs-trigger="hover"
                    data-bs-placement="top"
                    data-bs-html="true"
                    title="Çırağın Sarayı"
                    data-bs-content="<img src='/frontend/place/ciragin.jpg'>"></div>
                </div>

                <div style="left:38%; top:41%;" class="item animated fast" data-animation="zoomInReverse" data-animation-delay="200">
                    <div class="width-25 width-25-sm height-25 height-25-sm icon-animated circle bg-success active-inview"
                    data-bs-toggle="popover"
                    data-bs-trigger="hover"
                    data-bs-placement="top"
                    data-bs-html="true"
                    title="Four Seasons Bosphorus"
                    data-bs-content="<img src='/frontend/place/Four-Seasons-Bosphorus.jpg'>"></div>
                </div>

                <div style="left:25%; top:60%;" class="item animated fast" data-animation="zoomInReverse" data-animation-delay="200">
                    <div class="width-25 width-25-sm height-25 height-25-sm circle bg-white icon-animated1 b-white active-inview"
                    data-bs-toggle="popover"
                    data-bs-trigger="hover"
                    data-bs-placement="top"
                    data-bs-html="true"
                    title="The Peninsula Istanbul"
                    data-bs-content="<img src='/frontend/place/The-Peninsula-Istanbul.jpg'>"></div>
                </div>

                <div style="left:35%; top:42%;" class="item animated fast" data-animation="zoomInReverse" data-animation-delay="200">
                    <div class="width-25 width-25-sm height-25 height-25-sm circle bg-white icon-animated1 b-white active-inview"
                    data-bs-toggle="popover"
                    data-bs-trigger="hover"
                    data-bs-placement="top"
                    data-bs-html="true"
                    title="Shangri-La Bosphorus İstanbul"
                    data-bs-content="<img src='/frontend/place/Shangri-La-Bosphorus-İstanbul.jpg'>"></div>
                </div>

                <div style="left:30%; top:50%;" class="item animated fast" data-animation="zoomInReverse" data-animation-delay="200">
                    <div class="width-25 width-25-sm height-25 height-25-sm circle bg-white icon-animated1 b-white active-inview"
                    data-bs-toggle="popover"
                    data-bs-trigger="hover"
                    data-bs-placement="top"
                    data-bs-html="true"
                    title="Mandarin"
                    data-bs-content="<img src='/frontend/place/mandarin.jpg'>"></div>
                </div>


                <div style="left:50%; top:28%;" class="item animated fast" data-animation="zoomInReverse" data-animation-delay="200">
                    <div class="width-25 width-25-sm height-25 height-25-sm circle bg-white icon-animated1 b-white active-inview"
                    data-bs-toggle="popover"
                    data-bs-trigger="hover"
                    data-bs-placement="top"
                    data-bs-html="true"
                    title="Sortie"
                    data-bs-content="<img src='/frontend/place/sortie.jpg'>"></div>
                </div>

                <div style="left:52%; top:25%;" class="item animated fast" data-animation="zoomInReverse" data-animation-delay="200">
                    <div class="width-25 width-25-sm height-25 height-25-sm circle bg-white icon-animated1 b-white active-inview"
                    data-bs-toggle="popover"
                    data-bs-trigger="hover"
                    data-bs-placement="top"
                    data-bs-html="true"
                    title="Oligark İstanbul"
                    data-bs-content="<img src='/frontend/place/Oligark-İstanbul.jpg'>"></div>
                </div>
                
            </div>
        </div>
    </div>


    </div>

@endsection

@section('customJS')

  <script>
    (function($, window, document, undefined) {
        'use strict';
        $('#portfolio-items').cubeportfolio({
            mediaQueries: [{
                width: 992,
                cols: 3,
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
            gapHorizontal: 20,
            gapVertical: 20,
            caption: 'none',
            animationType: 'quicksand',
            displayType: 'none',
            displayTypeSpeed: 60,
        });

        $(".cbp-filter-item-active").addClass("active");
        $("[data-filter]").on("click", function(){
            $("[data-filter]").removeClass("active");
            $(".cbp-filter-item-active").addClass("active");
        });

    })(jQuery, window, document);
</script>
<script src="/frontend/js/revolutionslider/jquery.themepunch.revolution.min.js"></script>
<script src="/frontend/js/revolutionslider/jquery.themepunch.tools.min.js"></script>
<script>

    var tpj=jQuery;
    var revapi1014;
    tpj(document).ready(function() {
    if(tpj("#rev_slider_1014_1").revolution == undefined){
    revslider_showDoubleJqueryError("#rev_slider_1014_1");
    }else{
    revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
        sliderType:"standard",
    jsFileLocation:"revolution/js/",
        sliderLayout:"fullscreen",
        dottedOverlay:"none",
        delay:9000,
        navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            mouseScrollReverse:"default",
            onHoverStop:"off",
            touch:{
                touchenabled:"on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
            }
            ,
            arrows: {
                style:"uranus",
                enable:true,
                hide_onmobile:true,
                hide_under:768,
                hide_onleave:false,
                tmp:'',
                left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:20,
                    v_offset:0
                },
                right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:20,
                    v_offset:0
                }
            }
        },
        responsiveLevels:[1240,1024,778,480],
        visibilityLevels:[1240,1024,778,480],
        gridwidth:[1240,1024,778,480],
        gridheight:[868,768,960,600],
        lazyType:"none",
        shadow:0,
        spinner:"off",
        stopLoop:"on",
        stopAfterLoops:0,
        stopAtSlide:1,
        shuffle:"off",
        autoHeight:"off",
        fullScreenAutoWidth:"off",
        fullScreenAlignForce:"off",
        fullScreenOffsetContainer: "",
        fullScreenOffset: "0px",
        disableProgressBar:"on",
        hideThumbsOnMobile:"off",
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        debugMode:false,
        fallbacks: {
            simplifyAll:"off",
            nextSlideOnWindowFocus:"off",
            disableFocusListener:false,
        }
    });
    }

    RsTypewriterAddOn(tpj, revapi1014);
    });

</script>
@endsection
