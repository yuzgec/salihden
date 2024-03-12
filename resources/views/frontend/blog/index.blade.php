@extends('frontend.layout.app')

@section('customCSS')
<link rel="stylesheet" href="/frontend/css/blog.css?v=3.0"/>
@endsection

@section('customJS')


<script>
    (function($, window, document, undefined) {
        'use strict';
        // init cubeportfolio
        $('#blog-posts').cubeportfolio({
            filters: '#blog-filters',
            search: '#blog-search',
            gapHorizontal: 25,
            layoutMode: 'masonry',
            gapVertical: 25,
            gridAdjustment: 'responsive',
            mediaQueries: [{
                width: 850,
                cols: 3
            }, {
                width: 640,
                cols: 2,
                options: {
                    gapVertical: 15,
                    gapHorizontal: 15
                }
            }, {
                width: 480,
                cols: 1,
                options: {
                    gapVertical: 15,
                    gapHorizontal: 15
                }
            }],
            caption: 'none',
            animationType: 'sequentially',
            displayType: 'none',
            displayTypeSpeed: 60,
        });
        $("#blog-filters [data-filter]").on("click", function(){ var value = $(this).html(); $("#active-filter").html(value); });
        $('body').on('click', function (e) {
            $('[data-bs-toggle="popover"]').each(function () {
                if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {$(this).popover('hide');}
            });
        });

    })(jQuery, window, document);
</script>
    
@endsection
@section('content')
<section id="blog" class="blog post-radius post-shadow lh-lg py-70">
    <div class="container">
        <div id="blog-posts" class="blog-posts">
        @foreach ($All as $item)
       
            <figure id="{{ $item->id}}" class="post cbp-item ">
                <figcaption>
                    <div class="cbp-caption">
                        <a href="{{ route('blogdetail', $item->slug)}}" class="cbp-caption-defaultWrap">
                            <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" alt=" {{ $item->title}} - Denden Denizcilik - Kiralık Tekneler">
                        </a>
                    </div>
                    <a href="{{ route('blogdetail', $item->slug)}}" class="post-details" title="{{ $item->title}}">
                        <div class="post-date colored">
                            {{ now()->translatedFormat('d F Y') }}
                        </div>
                        <h4 class="post-title">
                            {{ $item->title}}
                        </h4>
                        <p class="post-message ucsatir">
                            {{ $item->short}}
                        </p>
                    </a>
                  
                </figcaption>
            </figure>
    
            @endforeach
        </div>
  

    </div>

    
</section>
@endsection