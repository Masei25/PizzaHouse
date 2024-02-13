@extends('layouts.layout')

@section('title', 'Pizza House')

@section('content')
    <!-- banner section -->
<section id="home" class="w3l-banner py-5">
    <div class="container py-lg-5 py-md-4 mt-lg-0 mt-md-5 mt-4">
        <div class="row align-items-center py-lg-5 py-4 mt-4">
            <div class="col-lg-6 col-sm-12">
                <h3 class="">Delight your Best. </h3>
                <h2 class="mb-4">Pizza House</h2>
                <p>We are dedicated to the safety of our guests and employees and have updated our safety measures.
                    Lorem ipsum dolor sit amet elit. Provident.
                    fugit odit? Fugit ipsam. Sed ac ex. Nam mauris velit, ac
                    cursus quis, leo.</p>
                <div class="mt-md-5 mt-4">
                    {{-- <a class="btn btn-primary btn-style mr-2" href="{{route('menu')}}"> See Menu </a> --}}
                    <a class="btn btn-outline-primary btn-style" href="{{route('menu')}}"> Check Our Menu </a>
                </div>
            </div>
            <div class="col-lg-5">
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->
<section class="w3l-index3" id="work">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-6 left-wthree-img text-righ">
                    <div class="position-relative">
                        <img src="{{ asset('images/about.jpg') }}" alt="" class="img-fluid radius-image-full">
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->

                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 about-right-faq align-self">
                    <h5 class="title-small mb-1">Our story</h5>
                    <h3 class="title-big">Pizza! You won't Find Anywhere Else with Best Quality <span>Ingredients</span>
                    </h3>
                    <p class="mt-sm-4 mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Non quae, consequatur voluptatem ad.</p>
                    <a class="btn btn-primary btn-style mt-md-5 mt-4 mr-2" href="about.html"> Read More </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /bottom-grids-->
<section class="w3l-bottom-grids-6 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box">
                    <img src="{{ asset('images/burger.png') }}" alt="burger logo" width="35px">
                    <h4><a href="#feature" class="title-head">Pizza</a></h4>
                    <p class="mb-3">Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in
                        faucibus orci dolor sit et amet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                <div class="area-box">
                    <img src="{{asset('images/snack.png')}}" alt="burger logo" width="35px">
                    <h4><a href="#feature" class="title-head">Snacks</a></h4>
                    <p class="mb-3">Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in
                        faucibus orci dolor sit et amet.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                <div class="area-box">
                    <img src="{{asset('images/beverage.png')}}" alt="burger logo" width="35px">
                    <h4><a href="#feature" class="title-head">Beverages</a></h4>
                    <p class="mb-3">Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in
                        faucibus orci dolor sit et amet.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //bottom-grids-->

<!-- /mobile section --->
<section class="w3l-mobile-content-6 py-5">
    <div class="mobile-info py-lg-5 py-md-4 py-2">
        <!-- /mobile-info-->
        <div class="container">
            <div class="row mobile-info-inn mx-lg-0">
                <div class="col-lg-4 mobile-right">
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-leaf"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a>Natural ingredients</a></h6>
                            <p>Natural Ingredients sources, imports and distributes fruit and vegetable ingredients for customers in the manufacturing, food service and retail industries.</p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-shopping-basket"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a> Fresh vegetables & Meet</a></h6>
                            <p>Organically grown foods don't include GMOs, and are also free from most pesticide treatments, including glyphosate..</p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-users"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a>World’s best Chef </a></h6>
                            <p>Organically grown foods don't include GMOs, and are also free from most pesticide treatments, including glyphosate..</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mobile-left">
                    <img src="assets/images/burger1.png" class="img-fluid radius-image" alt="">
                </div>
                <div class="col-lg-4 mobile-right">
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-cogs"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url">Best quality products</a></h6>
                            <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-motorcycle"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url">Fastest door delivery</a></h6>
                            <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="row mobile-right-grids">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-thumbs-down"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6><a href="#url">Ground beef & Low fat</a></h6>
                            <p>Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- //mobile-info-->
    </div>
</section>
<!-- //mobile section --->
@endsection



