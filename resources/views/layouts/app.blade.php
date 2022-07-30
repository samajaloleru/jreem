<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name')}}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        

        <!-- Styles -->
        <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
        <link rel="stylesheet" href="/frontend/css/bootstrap.css" />
        <link rel="stylesheet" href="/frontend/css/animate.css" />
        <link rel="stylesheet" href="/frontend/css/font-awesome.css" />
        <link rel="stylesheet" href="/frontend/css/strok_gap_icon.css" />
        <link rel="stylesheet" href="/frontend/css/settings.css" />
        <link rel="stylesheet" href="/frontend/css/owl.carousel.css" />
        <link rel="stylesheet" href="/frontend/css/preset.css" />
        <link rel="stylesheet" href="/frontend/css/style.css" />
        <link rel="stylesheet" href="/frontend/css/responsive.css" />
        <link rel="icon" type="image/png" href="images/favicon.png">
        <!-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/strok_gap_icon.css') }}" rel="stylesheet">
        <link href="{{ asset('css/settings.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('css/preset.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet"> -->
        
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <!-- <div class="preloader">
            <div class="la-ball-scale-multiple la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div> -->
        @include('inc.navbar')
        
        <div class="container">
            @include('inc.messages')
        </div>
                
        @yield('content')

        @include('inc.footer')


        <!--   Core JS Files   -->
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script src="/frontend/js/jquery.js"></script>
        <script src="/frontend/js/bootstrap.min.js"></script>
        <script src="/frontend/js/mixer.js"></script>
        <script src="/frontend/js/wow.min.js"></script>
        <script src="/frontend/js/jquery.appear.js"></script>
        <script src="/frontend/js/owl.carousel.js"></script>
        <script src="/frontend/js/jquery.themepunch.tools.min.js"></script>
        <script src="/frontend/js/jquery.themepunch.revolution.min.js"></script>
        <script src="/frontend/js/jquery.plugin.min.js"></script>
        <script src="/frontend/js/jquery.countdown.min.js"></script>
        <script src="/frontend/js/wow.min.js"></script>
        <script src="/frontend/js/theme.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
    </body>
</html>
