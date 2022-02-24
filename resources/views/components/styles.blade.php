<!-- STYLESHEETS -->
<link rel="stylesheet" href="{{ front_asset('css/bootstrap.min.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{ front_asset('libs/Vimeo-Youtube-Video-Popup-Plugin-jQuery/src/video.popup.min.css')}}"
    type="text/css" media="all">
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
    :root {
        --primary: {{setting('portfolio.portfolio_primary_color', '#6d6e74') }};
    }

    .youtube-thumbnail-box {
        width: 100%;
        height: 420px;
        position: relative;
        margin: 10px 5px;
        overflow: hidden;
        cursor: pointer;
    }

    @media only screen and (max-width: 500px) {
        .youtube-thumbnail-box {
            height: 145px;
        }
    }
    .youtube-thumbnail-box:hover .youtube-thumbnail-overlay {
        background: rgb(56 56 56 / 60%);
    }

    .youtube-thumbnail {
        width: 100%;
        border-radius: 5px;
        position: absolute;
    }

    .youtube-thumbnail-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgb(56 56 56 / 41%);
        transition: all ease-out 0.4s;
    }

    .youtube-thumbnail-box-icon {
        position: absolute;
        width: 50px;
        top: 45%;
        left: 45%;
    }
</style>
@stack('extra-styles')
