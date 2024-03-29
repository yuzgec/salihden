<!DOCTYPE html>
<html lang="tr">
<head>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    @include('frontend.layout.css')
    @yield('customCSS')
</head>

<body>

    @include('frontend.layout.header')

    @yield('content')

    @include('frontend.layout.footer')
    @include('frontend.layout.js')
    @yield('customJS')

</body>
</html>