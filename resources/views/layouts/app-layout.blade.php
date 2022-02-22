<!DOCTYPE html>
<html lang="en-US">

<head>
    <x-meta-manager />
    <x-favicon />
    <x-styles />

</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="outer">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>

    <!-- site wrapper -->
    <div class="site-wrapper">

        <!-- mobile header -->
        <div class="mobile-header py-2 px-3 mt-4">
            <button class="menu-icon mr-2">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a href="{{ route('portfolio') }}" class="logo">
                <img src="{{ Voyager::image(setting('portfolio.mobile_menu_image')) }}" style="border-radius: 5px;" />
            </a>
            <a href="{{ route('portfolio') }}" class="site-title dot ml-2">{{ setting('portfolio.nick_name') }}</a>
        </div>

        <!-- header -->
        <header class="left float-left shadow-dark" id="header">
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="header-inner d-flex align-items-start flex-column">
                <a href="{{ route('portfolio') }}"><img
                        src="{{ Voyager::image(setting('portfolio.mobile_menu_image')) }}"
                        style="max-width:150px;border-radius: 5px;" /></a>
                <a href="{{ route('portfolio') }}" class="site-title dot mt-3">{{ setting('portfolio.nick_name') }}</a>
                <span class="site-slogan">{{ setting('portfolio.designation') }}</span>

                <!-- navigation menu -->
                <nav>
                    <ul class="vertical-menu scrollspy">
                        <li><a href="{{ route('portfolio') }}#home" class="active" data-scroll="#home">
                                <i class="icon-home"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('portfolio') }}#about" data-scroll="#about">
                                <i class="icon-user"></i>
                                About
                            </a>
                        </li>
                        <li><a href="{{ route('portfolio') }}#services" data-scroll="#services">
                                <i class="icon-bulb"></i>
                                Services
                            </a>
                        </li>
                        <li><a href="{{ route('portfolio') }}#resume" data-scroll="#resume">
                                <i class="icon-graduation"></i>
                                Resume
                            </a>
                        </li>
                        <li><a href="{{ route('portfolio') }}#works" data-scroll="#works">
                                <i class="icon-grid"></i>
                                Works
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('portfolio') }}#blog" data-scroll="#blog">
                                <i class="icon-pencil"></i>
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('portfolio') }}#contact" data-scroll="#contact">
                                <i class="icon-phone"></i>
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- footer -->
                <div class="footer mt-auto">

                    <!-- social icons -->
                    <ul class="social-icons list-inline">
                        @if (setting('social.facebook'))
                        <li class="list-inline-item">
                            <a href="{{ setting('social.facebook') }}" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        @endif
                        @if (setting('social.twitter'))
                        <li class="list-inline-item">
                            <a href="{{ setting('social.twitter') }}" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        @endif
                        @if (setting('social.linkedin'))
                        <li class="list-inline-item">
                            <a href="{{ setting('social.linkedin') }}" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        @endif
                        @if (setting('social.instagram'))
                        <li class="list-inline-item">
                            <a href="{{ setting('social.instagram') }}" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        @endif
                        @if (setting('social.youtube'))
                        <li class="list-inline-item">
                            <a href="{{ setting('social.youtube') }}" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        @endif
                    </ul>

                    <!-- copyright -->
                    <span class="copyright">© {{ date('Y')}}<span style="font-size: 18px">💝</span>{{
                        setting('portfolio.full_name')
                        }}</span>
                </div>
            </div>
        </header>

        <!-- main content area -->
        <main class="content float-right">
            {{ $slot }}

        </main>

    </div>

    <!-- Go to top button -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

    <x-scripts />

</body>

</html>
