<footer id="footer" class="pt-80 bg-dark b-0 relative">
    <div class="absolute left-0 top-0 zi--1 pointer-events-none fullwidth fullheight">
        <a href="{{ route('home')}}" class="logo">
            <img src="/denden_logo_b.png" alt="{{ __('site.firma')}}" class="logo-white" >
        </a>
    </div>
    <div class="container">

        <div class="row row-eq-height">
            <div class="col-md-3 col-12 mt-40 t-left">
                <a href="{{ route('home')}}" class="logo">
                    <img src="/denden_logo_b.png" alt="{{ __('site.firma')}}" class="img-fluid" style="max-width:200px">
                </a>
                <a href="tel:{{ config('settings.telefon1')}}" class="colored-hover fs-22 white  block mt-40">{{ config('settings.telefon1')}} </a>
                <a href="mailto:{{ config('settings.email1')}}" class="colored-hover fs-22 white  mt-15 block">{{ config('settings.email1')}}</a>

                <div class="mt-30">
                    <a href="{{ config('settings.youtube')}}"
                        class="icon-xs width-40 height-40 bg-twitter-hover bg-gray7 white slow-sm ">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="{{ config('settings.facebook')}}"
                        class="icon-xs width-40 height-40 bg-facebook-hover bg-gray7 white slow-sm ml-10 ml-0-sm mr-10-sm">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a  href="{{ config('settings.instagram')}}"
                        class="icon-xs width-40 height-40 bg-instagram-hover bg-gray7 white slow-sm ml-10 ml-0-sm mr-10-sm">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                        
                </div>
            <div class="col-md-3 col-12 mt-40 t-left">
                <h4 class="text-white ">{{ __('site.kurumsal')}}</h4>
                <ul class="list list-lg px-0 gray5 pt-40 fs-16">
                    @foreach ($Pages as $item)
                        <li>
                            <a href="{{ route('corporatedetail', $item->slug)}}" class="white-hover">{{ $item->title}}</a>
                        </li>
                    @endforeach
                </ul> 
            </div>
            <div class="col-md-3 col-12 mt-40 t-left">
                <h4 class="text-white ">{{ __('site.hizmetlerimiz')}}</h4>
                <ul class="list list-lg px-0 gray5 pt-40 fs-16">
                    @foreach ($Service as $item)
                        <li>
                            <a href="{{ route('servicedetail', $item->slug)}}" class="white-hover">{{ $item->title}}</a>
                        </li>
                    @endforeach
                </ul> 
            </div>
            <div class="col-md-3 col-12 mt-40 t-left">
                <h4 class="text-white ">{{ __('site.yatlar')}}</h4>
                <ul class="list list-lg px-0 gray5 pt-40 fs-16">
                    @foreach ($Product as $item)
                        <li>
                            <a href="{{ route('productdetail', $item->slug)}}" class="white-hover">{{ $item->title}}</a>
                        </li>
                    @endforeach
                </ul> 
            </div>
            <div class="col-12 mt-120 mt-70-sm">
                <!-- Border -->
                <div class="fullwidth bt-1 b-solid b-dark"></div>
                <div class="py-30 row align-items-center justify-content-lg-between justify-content-center">
                    <div class="col-lg col-12-sm gray6 fs-13 t-left t-center-sm">©  {{ date('Y')}} {{ __('site.firma')}} All Rights Reserved.</div>
                    <div class="col-lg col-12-sm mt-5-sm gray6 fs-13 t-right t-center-sm">
                        <a href="#" target="_blank" class="white-hover slow">Privacy Policy</a> | 
                        <a href="#" target="_blank" class="white-hover slow">Terms and Condition</a>
                    </div>
                </div>
            </div>
            <!-- End footer bottom -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container in footer -->
</footer>