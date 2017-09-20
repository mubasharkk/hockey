<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">

    <title>{{config('app.name')}}</title>

    <!--
      manifest.json provides metadata used when your web app is added to the
      homescreen on Android. See https://developers.google.com/web/fundamentals/engage-and-retain/web-app-manifest/
    -->
    <link rel="manifest" href="/manifest.json">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Boostrap theme -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>


<div class="container">
    @include('components.header')

    {{--<div class="jumbotron">--}}
        {{--<h1><i class="fa fa-star fa-fw"></i> Jumbotron heading</h1>--}}
        {{--<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>--}}
    {{--</div>--}}

    <div class="row marketing">
        <div class="col-lg-12">
            <noscript>
                You need to enable JavaScript to run this app.
            </noscript>
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; {{date('Y')}} Company, Inc.</p>
    </footer>

</div> <!-- /container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/masonry.pkgd.min.js"></script>

<script src="/js/app.js"></script>

</body>
</html>

