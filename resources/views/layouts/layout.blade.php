<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style-starter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1> <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/burger.png') }}" alt="burger logo" width="35px" />Pizza House
                    </a></h1>

                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    @if (auth()->user())
                        <ul class="navbar-nav ml-auto flex justify-end space-x-3">
                            <div class="lg:flex lg:space-x-3 justify-end">
                                <li class="btn btn-outline-primary w-24 btn-style h-8 mt-1 items-center flex justify-center">
                                    <a class="flex text-xs"
                                        href="{{route('dashboard.show')}}">
                                       <span> Dashboard</span>
                                    </a>
                                </li>
                                <li class="btn btn-outline-primary w-24 btn-style h-8 mt-1 items-center flex justify-center">
                                    <a class="flex text-xs space-x-1"
                                        href="{{ route('additems') }}">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                       <span>AddItem</span>
                                    </a>
                                </li>
                                <li class="btn btn-primary btn-style w-24 flex items-center h-8 mt-1 justify-center">
                                    <a class="flex text-xs space-x-1"
                                        href="{{ route('logout') }}">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    @else
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item {{ request()->is('menu') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                            </li>
                            <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                            </li>
                            <li class="nav-item flex space-x-3 justify-center mr-2">
                                <a href="{{ route('cartindex') }}" class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="font-bold h-8 mt-1 text-green-500 hover:text-yellow-500" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                    @if (count(\Cart::session('guest')->getContent()) != null)
                                        <p class="text-red-500 font-black text-xs mt-2">{{ count(\Cart::session('guest')->getContent()) }}</p>
                                    @endif
                                </a>
                            </li>
                            <div class="flex space-x-3 justify-center">
                                <li class="btn btn-outline-primary w-24 btn-style h-8 mt-1 items-center flex justify-center">
                                    <a class="text-sm"
                                        href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="btn btn-primary btn-style w-28 flex items-center h-8 mt-1 justify-center">
                                    <a class="text-sm"
                                        href="{{ route('register') }}">Register</a>
                                </li>
                            </div>
                        </ul>
                    @endif
                </div>

            </nav>
        </div>
    </header>


    @yield('content')


    <footer class="py-5">
        <div class="container py-xl-4">
            <div class="row footer-top">
                <div class="col-lg-4 footer-grid_section_1its footer-text">
                    <!-- logo -->
                    <h2>
                        <a class="logo text-wh" href="index.html">
                            <img src="{{ asset('images/burger.png') }}" alt="" width="35px" /> Pizza House
                        </a>
                    </h2>
                    <!-- //logo -->
                    <p class="mt-lg-4 mt-3 mb-4 pb-lg-2">We are dedicated to the safety of our guests and employees and
                        have
                        updated
                        our safety measures. We believe in Simple, Creative, Modern and Flexible Design Standards with a
                        Retina and Responsive Approach.
                        Browse the amazing Features this template offers.</p>
                    <!-- social icons -->
                    <ul class="top-right-info">
                        <li>
                            <p>Follow us:</p>
                        </li>
                        <li class="facebook-w3">
                            <a href="#facebbok">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="twitter-w3">
                            <a href="#twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li class="google-w3">
                            <a href="#google">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </li>
                        <li class="dribble-w3">
                            <a href="#dribble">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                    </ul>
                    <!-- //social icons -->
                </div>
                <div class="col-lg-4 col-sm-6 footer-grid_section_1its mt-lg-0 mt-5">
                    <div class="footer-title">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="footer-text mt-4">
                        <p><strong>Address :</strong> Edmonton Greenm, London, UK.</p>
                        <p class="my-2"><strong>Phone :</strong> <a href="tel:+12 534894364">+4401234567</a></p>
                        <p><strong>Email :</strong> <a href="mailto:info@example.com">info@pizzahouse.com</a></p>
                    </div>
                    <div class="footer-title mt-4 pt-md-2">
                        <h3>Payments we accept</h3>
                    </div>
                    <ul class="list-unstyled payment-links mt-4">
                        <li>
                            <a href="#payment"><img src="assets/images/pay2.png" class="radius-image" width="55px"
                                    alt=""></a>
                        </li>
                        <li>
                            <a href="#payment"><img src="assets/images/pay5.png" class="radius-image" width="55px"
                                    alt=""></a>
                        </li>
                        <li>
                            <a href="#payment"><img src="assets/images/pay1.png" class="radius-image" width="55px"
                                    alt=""></a>
                        </li>
                        <li>
                            <a href="#payment"><img src="assets/images/pay4.png" class="radius-image" width="55px"
                                    alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-6 footer-grid_section_1its footer-text mt-lg-0 mt-5">
                    <div class="footer-title">
                        <h3>Subscribe Newsletter</h3>
                    </div>
                    <div class="info-form-right mt-4 p-0">
                        <p class="mb-4">Enter your email and receive the latest news, updates and special offers from
                            us.
                        </p>
                        <form action="#" method="post">
                            <div class="form-group mb-2">
                                <input type="email" class="form-control" name="Email" placeholder="Email" required="">
                            </div>
                            <button type="submit"
                                class="btn btn-style btn-primary w-100 d-block ml-auto py-2">Subscribe</button>
                        </form>
                        <h4 class="mt-4">Subscribe & Get $10 on Your First Order</h4>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="cpy-right text-center py-4">
        <p>© {{ date('Y') }} Burger Bun. All rights reserved | Design by Sammy.</a> </p>
    </div>
    <!-- //copyright -->

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
    <!-- /move top -->

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> <!-- Common jquery plugin -->

    <script src="{{ asset('js/owl.carousel.js') }}"></script><!-- owl carousel -->

    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function() {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false,
                        loop: false
                    }
                }
            })
        })

    </script>
    <!-- //script for tesimonials carousel slider -->

    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });

    </script>

    <script src="{{ asset('js/counter.js') }}"></script>

    <!-- gallery popup js -->
    <script src="{{ 'assets/js/smartphoto.js' }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sm = new SmartPhoto(".js-img-viwer", {
                showAnimation: false
            });
            // sm.destroy();
        });

    </script>
    <!-- //gallery popup js -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!--//MENU-JS-->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- //bootstrap-->

</body>

</html>
