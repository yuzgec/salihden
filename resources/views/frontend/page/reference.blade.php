@extends('frontend.app.master')
@section('content')
<section id="home" class="relative white height-25vh mnh-250 align-items-center d-flex" 
    data-bg="url(https://goldeyes.net/quadra/images/backgrounds/background_25.jpg)" 
    data-was-processed="true" 
    style="background-image: url(https://goldeyes.net/quadra/images/backgrounds/background_25.jpg);">
    <div class="container-md">
        <div class="t-center">
            <h5 class="fs-11 ls-4 semibold white uppercase">
               Ahmet Gökşin Güzeltepe
            </h5>
            <h1 class="mt-15 lh-md white">
               Referanslarımız
            </h1>

            <div class="mt-30 uppercase fs-12 bold bg-soft-dark3 radius-lg py-10 px-40 d-inline-flex width-auto lh-normal align-items-center">
                <a href="{{ route('home')}}"><i class="ti-home"></i></a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="{{ route('home')}}">Anasayfa</a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="#" class="stay c-default opacity-7">Kurumsal</a>
                <i class="ti-angle-right fs-7 mx-15"></i>
                <a href="#" class="stay c-default opacity-7">Referanslarımız</a>
            </div>

        </div>
    </div>
</section>

<div class="container mt-70 block-img block-links">
    <div class="row">
        @foreach ($All as $item)
            <div id="box-22" class="col-lg-3 col-6">
                <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" class="block fullwidth" alt="Gökşin Güzeltepe">
                <div class="d-flex justify-content-center align-items-center move-up-half">
                    <button class="d-flex justify-content-center py-5 lh-normal slow radius-lg width-percent-75 t-center bs-lg bg-black">
                        <span class="bold uppercase white fs-10">{{ $item->title }}</span>
                    </button>
                </div>
            </div>   
        @endforeach  
    </div>
</div>
@endsection