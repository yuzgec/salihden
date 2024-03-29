@extends('frontend.layout.app')
@section('content')
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
            <h1 class="mt-15 font-secondary lh-md"> {{ __('site.iletisim')}}</h1>
            <div class="mt-30 uppercase fs-12 bold bg-soft-dark3 radius-lg py-10 px-40 d-inline-flex width-auto lh-normal align-items-center">
                <a href="{{ route('home')}}"><i class="ti-home"></i></a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="{{ route('home')}}">{{ __('site.anasayfa')}}</a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="#" class="stay c-default opacity-7">{{ __('site.kurumsal')}}</a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="#" class="stay c-default opacity-7">{{ __('site.iletisim')}}</a>
            </div>
        </div>
    </div>
</section>

<section id="home">
    <div class="row mx-0">
        <div class="col-lg-7 col-12 o-auto scrollbar-styled height-full height-auto-sm px-0 d-flex align-items-center flex-wrap justify-content-center">
            <div id="contact-form-section" class="t-left width-percent-90 fullwidth-sm pt-50 pb-50 px-70 px-30-sm mxw-900">
                <h5 class="uppercase fs-11 medium ls-3 ls-1-sm" data-color="#000">
                    {{ __('site.firma')}}
                </h5>
                <h4 class="mt-15 bold fs-32 fs-22-sm dark underline-hover-slide underline-slide ls--1 ls-0-sm">
                   <a href="mailto:{{ config('settins.email1')}}">{{ config('settings.email1') }}</a>
                </h4>
                <p class="light fs-22 fs-18-sm gray7 lh-35 lh-25-sm mt-15">
                    {{__('site.form_info')}}       
                </p>
                <form id="contact_form" class="validate-me mt-40" name="contact_form" method="post" action="php/mail.php" >
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="name1" placeholder="{{__('site.form_adsoyad')}}*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder">
                        </div>
                        <div class="col-12 mt-20">
                            <input type="email" name="email1"  placeholder="{{__('site.form_email')}}*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder">
                        </div>
                        <div class="col-12 mt-20">
                            <textarea name="message1"  placeholder="{{__('site.form_mesaj')}}*" required class="py-20 px-25 b-transparent fs-18 bg-gray2 dark-placeholder height-150"></textarea>
                        </div>
                        <div class="col-12 mt-20 d-flex justify-content-start align-items-center">
                           <button type="submit" id="submit" class="inline-block width-250 py-20 bs-colored white ls-3-hover slow bold fs-14 uppercase"
                            data-bgcolor="#000">{{__('site.form_submit')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-5 col-12 px-0 height-full height-400-sm d-flex align-items-center justify-content-center">
            <div id="hotspots" class="hotspots fullwidth fullheight">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12035.998918648687!2d29.007374!3d41.047135!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab77b64cb54b1%3A0x2ace78f72b83fcab!2sDenDen%20Denizcilik%20%C3%96zel%20L%C3%BCks%20Yat%20Kiralama!5e0!3m2!1str!2sus!4v1704676316845!5m2!1str!2sus"                    width="600"
                    height="1000"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>  
          </div>
        </div>
    </div>
</section>
@endsection