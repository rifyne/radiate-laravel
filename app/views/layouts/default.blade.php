<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            @section('title')
            Radiate
            @show
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="{{ asset('assets/styles/plugins/normalize.css')}} ">
        <link rel="stylesheet" href="{{ asset('assets/styles/shared/main.css')}} ">
        <link href="{{ asset('assets/styles/plugins/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/styles/plugins/bootstrap-responsive.css') }}" rel="stylesheet">

        <script src="{{ asset('assets/scripts/js/vendor/modernizr-2.6.2.min.js') }}"></script>

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">
        <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">


    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- Container -->
        <div class="container">

            <!-- Notifications -->
            @include('partials.notifications')
            <!-- ./ notifications -->

            <!-- Content -->
            @yield('content')
            <!-- ./ content -->
        </div>
        <!-- ./ container -->

        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/scripts/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

        <script src="{{ asset('assets/scripts/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/scripts/js/main.js') }}"></script>
        <script src="{{ asset('assets/scripts/js/vendor/bootstrap.min.js') }}"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
