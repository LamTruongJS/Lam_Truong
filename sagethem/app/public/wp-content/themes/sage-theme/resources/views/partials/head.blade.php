<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />
    <link rel="icon" href="#" type="image/x-icon">
    <!-- {{App::getFavicon()}}  -->
    <link rel="apple-touch-icon" sizes="180x180" href="#">
    <!-- {{App::getAppleIcon()}} -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="description" content="Author: A.N. Author,
    Illustrator: P. Picture, Category: Books, Price: $17.99,
    Length: 784 pages">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com" rel="dns-prefetch" crossorigin>
    <link href="https://fonts.googleapis.com" rel="preconnect" crossorigin>
    <link href="https://cdnjs.cloudflare.com" rel="dns-prefetch" crossorigin>
    <link href="https://cdnjs.cloudflare.com" rel="preconnect" crossorigin>
    <link rel="preload" href='@asset("styles/app.css")' as="style">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" rel="preload" as="script">
    <link href='@asset("scripts/app-mobile.js")' media="(max-width: 991px)" rel="preload" as="script">
    <link href='@asset("scripts/app-desktop.js")' media="(min-width: 992px)" rel="preload" as="script">
    @php wp_head() @endphp
    <link rel='stylesheet' id='sage/font-css' onload="if(media!='screen')media='screen'" href='{{S3_FONT}}'
        type='text/css' media='print' />
    {!! App::getTrackingCode('in_head') !!}


    <!-- social Share -->
    <!-- Primary Meta Tags -->

    <!-- <title>tiltle Of WebSite</title>
    <meta name="title" content="tiltle Of WebSite" />
    <meta
      name="description"
      content="description of website"
    /> -->

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <!-- <meta property="og:url" content="link online of website" /> 
    <meta property="og:title" content="tiltle Of WebSite" />
    <meta
      property="og:description"
      content="description of website"
    /> -->
    <meta property="og:image" content="@asset('images/social_share.PNG')" />

    <!-- Twitter -->
    <!-- <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="link online of website" />
    <meta property="twitter:title" content="tiltle Of WebSite" />
    <meta
      property="twitter:description"
      content="description of website"
    /> -->
    <meta property="twitter:image" content="@asset('images/social_share.PNG')" />

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>