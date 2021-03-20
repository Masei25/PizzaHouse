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
                        <ul class="navbar-nav ml-auto space-x-3">
                            <li>
                                <a class="border-2 text-white border-yellow-400 py-1 mt-1 flex rounded p-1 font-medium hover:bg-yellow-400 easy-in-out duration-400"
                                    href="/users">
                                    <p class="text-sm text-gray-200">Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a class="border-2 text-white border-yellow-400 py-1 mt-1 flex rounded p-1 font-medium hover:bg-yellow-400 easy-in-out duration-400"
                                    href="{{ route('additems') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                    <p class="text-sm text-gray-200">Add Item</p>
                                </a>
                            </li>
                            <li class="">
                                <a class="item-center text-gray-800  border-yellow-400 space-x-2 bg-yellow-400 py-1 mt-1 flex rounded p-1.5 font-medium hover:bg-opacity-70 easy-in-out duration-400"
                                    href="{{ route('logout') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                                        <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                                    </svg>
                                    <p class="text-base text-gray-800">Logout</p>
                                </a>
                            </li>

                        </ul>
                    @else
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item @@about__active">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item @@menu__active">
                                <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                            </li>
                            <li class="nav-item @@contact__active">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <li class="nav-item @@contact__active">
                                <a class="btn btn-outline-primary btn-style py-1 mt-1"
                                    href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item @@contact__active">
                                <a class="btn btn-primary btn-style mr-2 py-1 mt-1"
                                    href="{{ route('register') }}">Register</a>
                            </li>

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
                        <p><strong>Address :</strong> Burger Bun, 208 Trainer Avenue street, Corner
                            Market, NY - 62617.</p>
                        <p class="my-2"><strong>Phone :</strong> <a href="tel:+12 534894364">+12 534894364</a></p>
                        <p><strong>Email :</strong> <a href="mailto:info@example.com">info@example.com</a></p>
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
