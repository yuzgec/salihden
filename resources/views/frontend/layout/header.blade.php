<nav id="navigation" class="modern-nav sticky bordered link-hover-02 nav-dark bg-dark" data-offset="0">

<div id="top-bar-1624312452" class="top-bar height-50 height-50-sm bg-dark" data-expire="0.021">
    <div class="container">
        <div class="row align-items-center">
            <div
                class="col-lg-8 col-sm-12 d-flex t-left t-center-sm justify-content-lg-start justify-content-center hidden-sm">
                <a
                    href="tel:{{ config('settings.telefon1')}}"
                    class="fs-16 mr-30 white underline-hover-slide underline-slide underline-white">
                    <i class="fas fa-phone-volume mt-5"></i>&nbsp;{{ config('settings.telefon1')}}
                </a>
                <a
                    href="tel:{{ config('settings.telefon2')}}"
                    class="fs-16 mr-30 white underline-hover-slide underline-slide underline-white">
                    <i class="fas fa-phone-volume mt-5"></i>&nbsp;{{ config('settings.telefon2')}}
                </a>
                <a
                    href="tel:{{ config('settings.telefon3')}}"
                    class="fs-16 mr-30 white underline-hover-slide underline-slide underline-white">
                    <i class="fas fa-phone-volume mt-5"></i>&nbsp;{{ config('settings.telefon3')}}
                </a>
                <a
                    href="mailto:{{ config('settings.email1')}}"
                    class="fs-16 mr-30 white underline-hover-slide underline-slide underline-white">
                    <i class="far fa-envelope mt-5"></i>&nbsp;{{ config('settings.email1')}}
                </a>
              
            </div>

            <div class="col-lg-4 col-sm-12 mt-10-sm d-flex t-right t-center-sm align-items-center justify-content-lg-end justify-content-center">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, '/', [], true) }}"
                    class="icon-xs white slow-sm bg-facebook-hover">
                    <img src="/frontend/flag/{{$localeCode }}.svg" class="circle" width="20px" >
                </a>
                @endforeach

                {{-- <a href="tel:{{ config('settings.telefon1')}}"
                    class="visible-lg nav-button bg-colored white uppercase bold slow hover-cursor fs-16" 
                    title="444 9 409">{{ config('settings.telefon1')}}
                </a> --}}
                
                </div>
            </div>
        </div>
    </div>    
    <div class="container nav-container">
        <div class="row nav-wrapper">

            <div class="col">
                <a href="{{ route('home')}}" class="logo">
                    <img src="/denden_logo_b.png" alt="DENDEN DENİZCİLİK" class="logo-white" >
                </a>
            </div>

            <div class="col nav-menu">
                <ul class="nav-links justify-content-center">

                    <li class="logo-for-mobile-navigation">
                        <a href="{{ route('home')}}">
                            <img src="/denden_logo_b.png" alt="DENDEN DENİZCİLİK" style="width:200px;margin-top:30px">
                        </a>
                    </li>

                    <li><a href="{{ route('home')}}" class="nav-link">{{__('site.anasayfa')}}</a></li>

                    <li class="dd-toggle">
                        <a href="#" class="nav-link">{{__('site.kurumsal')}}</a>
                        <ul class="dropdown-menu">
                            @foreach ($Pages->where('category', 1) as $item)
                                <li>
                                    <a href="{{ route('corporatedetail',  $item->slug)}}" class="nav-link">{{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dd-toggle">
                        <a href="#" class="nav-link">{{__('site.hizmetlerimiz')}}</a>
                        <ul class="dropdown-menu ">
                            @foreach ($Service as $item)
                                <li>
                                    <a href="{{ route('servicedetail',  $item->slug)}}" class="nav-link">{{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dd-toggle">
                        <a href="#" class="nav-link">{{ __('site.yatlar')}}</a>
                        <ul class="dropdown-menu ">
                            @foreach ($Product as $item)
                                <li>
                                    <a href="{{ route('productdetail',  $item->slug)}}" class="nav-link">{{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('home')}}" class="nav-link">Blog</a></li>
                    <li class="dd-toggle">
                        <a href="#" class="nav-link">{{ __('site.referanslar')}}</a>
                        <ul class="dropdown-menu ">
                            @foreach ($Pages->where('category', 2) as $item)
                                <li>
                                    <a href="{{ route('corporatedetail',  $item->slug)}}" class="nav-link">{{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('contactus')}}" class="nav-link">{{ __('site.iletisim')}}</a></li>

                </ul>
            </div>
            <div class="col">
                <ul class="nav-links justify-content-end">
                    <li class="extra-links">
                        <div class="bracket hidden-xl hidden-sm"></div>
                        <a href="https://www.youtube.com/{{ config('settings.youtube')}}" target="_blank" class="visible-lg nav-link" title="youtube"><i class="ti-youtube"></i></a>
                        <a href="https://www.instagram.com/{{ config('settings.instagram')}}" target="_blank" class="visible-lg nav-link" title="Instagram"><i class="ti-instagram"></i></a>
                        <a href="https://www.facebook.com/{{ config('settings.facebook')}}" target="_blank" class="visible-lg nav-link" title="facebook"><i class="ti-facebook"></i></a>
                       </li>
                </ul>
            </div>
            <div class="mobile-nb">
                <div class="hamburger-menu">
                    <div class="top-bun"></div>
                    <div class="meat"></div>
                    <div class="bottom-bun"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav-bg"></div>
</nav>