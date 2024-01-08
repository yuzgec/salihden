@extends('frontend.layout.app')
@section('customCSS')
    <link rel="stylesheet" href="/frontend/css/revolutionslider/settings.css" />
@endsection
@section('content')
    @include('frontend.layout.slider')

    <section id="element-template-01" class="py-50 bt-1 bg-dark b-solid">
        <div class="container">
            <h4 class="text-center text-white">{{ __('site.firmaadi')}} </h4>
            <h2 class="text-center text-white fs-50">{{ __('site.odullerimiz')}}</h2>
        
            <div id="image-slider-container" class="mt-50 mt-50-sm o-hidden-x mxw-full">
                <div id="image-slider" class="custom-slider fw-slider container block-img dots-circle c-resize" 
                    data-slick='{"dots": true, "centerMode": true, "speed":600, "arrows": true, "fade": false, "draggable":true, "slidesToShow": 3, "slidesToScroll": 3}'>
                    @foreach ($Odullerimiz->getMedia('gallery') as $item)
                        <div class="px-15 px-5-sm">
                            <img src="/frontend/images/blog/post_large_slider_loader.svg" 
                            data-lazy="{{ $item->getUrl() }}" alt="Denden Yatçılık - Ödüllerimiz" 
                            class="bs-lg">
                        </div>
                    @endforeach
                </div>
                <div class="mt-30 container t-center">
                    <a href="{{ route('corporatedetail', $Odullerimiz->slug)}}" target="_blank" class="lg-btn inline-block mt-30 bg-colored bg-colored1-hover white fs-11 bold uppercase slow-sm">
                        Hepsini Görüntüle
                    </a>
                </div>
            </div>
        </div>
    </section>


<div class="relative z-index-1 py-250">
    <!-- Video - Parent * should have "relative" class -->
    <div
        class="videobg loaded"
        data-background="images/videos/video-2-poster.jpg"
        style="background-image: url(&quot;images/videos/video-2-poster.jpg&quot;);">
        <video
            poster="images/videos/video-2-poster.jpg"
            playsinline=""
            autoplay=""
            muted=""
            loop="">
            <source src="images/videos/video-2.webm" type="video/webm">
                <source src="/istanbul.mp4" type="video/mp4"></video>
            </div>
            <!-- End Video -->
            <div class="relative zi-1">
                <h2 class="t-center white bold fs-40">BOĞAZIN EŞSİZ GÜZELLİĞİNDE TEKNE TURLARI</h2>
            </div>
        </div>

    <section id="element-template-01" class="py-50 bt-1 bg-dark b-solid">
        <div class="container">
            <h4 class="text-center text-white">{{ __('site.firmaadi')}} </h4>
            <h2 class="text-center text-white fs-50">DENDEN DENİZCİLİK</h2>
            <p class="text-center text-white">Denden yat kiralama lüks bir tatil deneyimi için mükemmel bir seçenektir.<br> Denizde keyifli dakikalar geçirmek için eşsiz bir fırsat sunuyor.</p>
            <div id="image-slider-container" class="mt-50 mt-50-sm o-hidden-x mxw-full">
                <div id="image-slider" class="custom-slider fw-slider container block-img dots-circle c-resize" 
                    data-slick='{"dots": true, "centerMode": true, "speed":600, "arrows": true, "fade": false, "draggable":true, "slidesToShow": 3, "slidesToScroll": 3}'>
                    @foreach ($Odullerimiz->getMedia('gallery') as $item)
                        <div class="px-15 px-5-sm">
                            <img src="/frontend/images/blog/post_large_slider_loader.svg" 
                            data-lazy="{{ $item->getUrl() }}" alt="Denden Yatçılık - Ödüllerimiz" 
                            class="bs-lg">
                        </div>
                    @endforeach
                </div>
                <div class="mt-30 container t-center">
                    <a href="{{ route('corporatedetail', $Odullerimiz->slug)}}" target="_blank" class="lg-btn inline-block mt-30 bg-colored bg-colored1-hover white fs-11 bold uppercase slow-sm">
                        Hepsini Görüntüle
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('customJS')
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
    });	/*ready*/

</script>
@endsection
