@extends('layouts.layout')

@section('title', 'Menu / Pizza House')

@section('content')
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Menu items</h2>
        </div>
    </div>
</section>
<div class="w3l-menublock py-5">
    <!-- menu block -->
    <div id="w3l-menublock" class="text-center py-lg-4 py-md-3">
        <div class="container">
            <input id="tab1" type="radio" name="tabs" checked>
            <label class="tabtle" for="tab1">Burgers</label>

            <input id="tab2" type="radio" name="tabs">
            <label class="tabtle" for="tab2">Hot Snacks</label>

            <input id="tab3" type="radio" name="tabs">
            <label class="tabtle" for="tab3">Beverages</label>

            <section class="w3l-team-main tab-content text-left" id="content1">
                <div class="team py-5">
                    <div class="container py-lg-5">
                        <div class="title-content text-center">
                            <h6 class="title-small">Experts and skillful</h6>
                            <h3 class="title-big">Our Experienced Chefs</h3>
                        </div>
                        <div class="row team-row mt-md-5 mt-5">
                            <div class="col-lg-3 col-6 team-wrap">
                                <div class="team-member text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('images/team1.jpg') }}" alt="" class="radius-image h-60">
                                        <div class="overlay-team">
                                            <div class="team-details text-center">
                                                <div class="p-2">
                                                    <a href="" class="rounded">
                                                        <span class="rounded-full text-sm px-5 bg-green-300 p-4 text-gray-800 hover:bg-opacity-75">Buy Now</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#url" class="team-title">Luke jacobs</a>
                                    <p>Experienced Chef</p>
                                </div>
                            </div>
                            <!-- end team member -->

                            <div class="col-lg-3 col-6 team-wrap mt-lg-0 mt-5">
                                <div class="team-member last text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('images/team4.jpg') }}" alt="" class="radius-image h-60">
                                        <div class="overlay-team">
                                            <div class="team-details text-center">
                                                <div class="socials mt-20">
                                                    <a href="#url">
                                                        <span class="fa fa-facebook-f"></span>
                                                    </a>
                                                    <a href="#url">
                                                        <span class="fa fa-twitter"></span>
                                                    </a>
                                                    <a href="#url">
                                                        <span class="fa fa-instagram"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#url" class="team-title">Sara grant</a>
                                    <p>Experienced Staff</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="w3l-team-main tab-content text-left" id="content2">
                <div class="team py-5">
                    <div class="container py-lg-5">
                        <div class="title-content text-center">
                            <h6 class="title-small">Experts and skillful</h6>
                            <h3 class="title-big">Our Experienced Chefs</h3>
                        </div>
                        <div class="row team-row mt-md-5 mt-5">
                            <div class="col-lg-3 col-6 team-wrap">
                                <div class="team-member text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('images/team1.jpg') }}" alt="" class="radius-image h-60">
                                        <div class="overlay-team">
                                            <div class="team-details text-center">
                                                <div class="p-2">
                                                    <a href="" class="rounded">
                                                        <span class="rounded-full text-sm px-5 bg-green-300 p-4 text-gray-800 hover:bg-opacity-75">Buy Now</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#url" class="team-title">Luke jacobs</a>
                                    <p>Experienced Chef</p>
                                </div>
                            </div>
                            <!-- end team member -->
                        </div>
                    </div>
            </section>

            <section class="w3l-team-main tab-content text-left" id="content3">
                <div class="team py-5">
                    <div class="container py-lg-5">
                        <div class="title-content text-center">
                            <h6 class="title-small">Experts and skillful</h6>
                            <h3 class="title-big">Our Experienced Chefs</h3>
                        </div>
                        <div class="row team-row mt-md-5 mt-5">
                            <div class="col-lg-3 col-6 team-wrap">
                                <div class="team-member text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('images/team1.jpg') }}" alt="" class="radius-image h-60">
                                        <div class="overlay-team">
                                            <div class="team-details text-center">
                                                <div class="p-2">
                                                    <a href="" class="rounded">
                                                        <span class="rounded-full text-sm px-5 bg-green-300 p-4 text-gray-800 hover:bg-opacity-75">Buy Now</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#url" class="team-title">Luke jacobs</a>
                                    <p>Experienced Chef</p>
                                </div>
                            </div>
                            <!-- end team member -->

                            <div class="col-lg-3 col-6 team-wrap mt-lg-0 mt-5">
                                <div class="team-member last text-center">
                                    <div class="team-img">
                                        <img src="{{ asset('images/team4.jpg') }}" alt="" class="radius-image h-60">
                                        <div class="overlay-team">
                                            <div class="team-details text-center">
                                                <div class="socials mt-20">
                                                    <a href="#url">
                                                        <span class="fa fa-facebook-f"></span>
                                                    </a>
                                                    <a href="#url">
                                                        <span class="fa fa-twitter"></span>
                                                    </a>
                                                    <a href="#url">
                                                        <span class="fa fa-instagram"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#url" class="team-title">Sara grant</a>
                                    <p>Experienced Staff</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

        </div>
    </div>
    <!-- menu block -->
</div>
@endsection
<!-- footer -->
