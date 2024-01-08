<nav id="navigation" class="modern-nav sticky bordered link-hover-02 nav-dark bg-dark" data-offset="0">
    <div class="container nav-container">
        <div class="row nav-wrapper">
            <div class="col">
                <a href="{{ route('home')}}" class="logo">
                    <img src="/denden_logo_b.png" alt="DENDEN DENİZCİLİK" class="logo-white" >
                </a>
            </div>

            <div class="col nav-menu">
                <ul class="nav-links justify-content-center">
                    <li class="logo-for-mobile-navigation"><img src="/denden_logo_b.png" alt="DENDEN DENİZCİLİK"></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                    <li class="dd-toggle">
                        <a href="#" class="nav-link">Kurumsal</a>
                        <ul class="dropdown-menu to-right">
                            @foreach ($Pages as $item)
                                <li class="dd-toggle">
                                    <a href="{{ route('corporatedetail',  $item->slug)}}" class="nav-link">{{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dd-toggle">
                        <a href="#" class="nav-link">Hizmetlerimiz</a>
                        <ul class="dropdown-menu to-right">
                            @foreach ($Service as $item)
                                <li class="dd-toggle">
                                    <a href="{{ route('servicedetail',  $item->slug)}}" class="nav-link">{{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dd-toggle">
                        <a href="#" class="nav-link">Yatlarımız</a>
                        <ul class="dropdown-menu to-right">
                            @foreach ($Product as $item)
                                <li class="dd-toggle">
                                    <a href="{{ route('productdetail',  $item->slug)}}" class="nav-link">{{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('home')}}" class="nav-link">Referanslar</a></li>
                    <li><a href="{{ route('contactus')}}" class="nav-link">İletişim</a></li>

                </ul>
            </div>
            <div class="col">
                <ul class="nav-links justify-content-end">
                    <li class="extra-links">
                        <div class="bracket hidden-xl hidden-sm"></div>
                        <a href="https://www.youtube.com/{{ config('settings.youtube')}}" target="_blank" class="visible-lg nav-link" title="youtube"><i class="ti-youtube"></i></a>
                        <a href="https://www.instagram.com/{{ config('settings.instagram')}}" target="_blank" class="visible-lg nav-link" title="Instagram"><i class="ti-instagram"></i></a>
                        <a href="https://www.facebook.com/{{ config('settings.facebook')}}" target="_blank" class="visible-lg nav-link" title="facebook"><i class="ti-facebook"></i></a>
                        <a href="tel:{{ config('settings.telefon1')}}" target="_blank" 
                        class="visible-lg nav-button bg-colored white uppercase bold slow hover-cursor fs-16" title="444 9 409">{{ config('settings.telefon1')}}</a>
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