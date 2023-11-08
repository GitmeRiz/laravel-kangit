<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="dns-prefetch" href="//www.google.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//googleads.g.doubleclick.net">
    <link rel="dns-prefetch" href="//www.googleadservices.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//js.intercomcdn.com">
    <link rel="dns-prefetch" href="//script.hotjar.com">
    <link rel="dns-prefetch" href="//static.hotjar.com">
    <link rel="dns-prefetch" href="//api.opmnstr.com">
    <link rel="dns-prefetch" href="//a.opmnstr.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="preload" href="fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="fonts/NunitoSans-Bold.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="fonts/NunitoSans-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous">
    <link rel="preload" href="fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="css/app.css?v=1.2.8" as="style" type="text/css">
    <link rel="stylesheet" href="css/app.css?v=1.2.8" media="all">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/kangit-ico.png">
    <link rel="preload" href="js/main.lp.js?v=1.1.0" as="script" type="text/javascript">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" />
    <script type="text/javascript" async="" src="https://widget.intercom.io/widget/wx2ij3ry"></script>
    <script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script>
    <script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NQKR456"></script>
    <script src="js/main.lp.js?v=1.1.0"></script>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default Title')</title>
    <meta name="description"
        content="Penyedia layanan Internet, Perawatan Komputer - laptop, Desain, instalasi jaringan, instalasi cctv, dll.">
    <meta name="keywords" content="">
    <script>
        var dataLayer = [];
    </script>

    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
    <meta name="robots" content="index, follow, noodp">
    <meta name="keywords"
        content="internet, internet murah, reparasi laptop murah, membuat website, web sekolah, rt rw net indonesia, desain terbaik, web indonesia, internet terbaik indonesia, web indonesia terbaik, web terbaik, web sekolah murah, internet murah indonesia, desain logo indonesia">
    <meta name="dcterms.type" content="Service">
    <meta name="dcterms.language" content="id">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <link rel="stylesheet" href="{{ asset('styles-1.css') }}">
    <link rel="stylesheet" href="{{ asset('render.css') }}">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>

<body>
    <div>
        @yield('content')
    </div>
</body>

</html>
