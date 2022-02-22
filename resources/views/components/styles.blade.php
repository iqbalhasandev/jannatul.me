<!-- STYLESHEETS -->
<link rel="stylesheet" href="{{ front_asset('css/bootstrap.min.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{ front_asset('css/all.min.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{ front_asset('css/simple-line-icons.min.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{ front_asset('css/slick.min.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{ front_asset('css/jquery.mCustomScrollbar.min.css')}}" type="text/css" media="all">
@stack('lib-styles')
<link rel="stylesheet" href="{{ front_asset('css/style.min.css')}}" type="text/css" media="all">



<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



<style>
    .client-item {
        min-height: 320px;
    }

    .youtubeIframe {
        width: 100%;
        height: 400px;
    }

    @media only screen and (max-width: 500px) {
        .youtubeIframe {
            height: 200px;
        }
    }

    :root {
        --primary: {{setting('portfolio.portfolio_primary_color', '#6d6e74')}} ;
    }
</style>
@stack('extra-styles')
