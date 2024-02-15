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
                <label class="tabtle" for="tab1">Pizza</label>

                <input id="tab2" type="radio" name="tabs">
                <label class="tabtle" for="tab2">Burger</label>

                <input id="tab3" type="radio" name="tabs">
                <label class="tabtle" for="tab3">Beverages</label>

                <section class="w3l-team-main tab-content text-left" id="content1">
                    <div class="team py-5">
                        <div class="container py-lg-5">
                            <div class="title-content text-center">
                                <h6 class="title-small">Our Chefs are Experts and skillful</h6>
                                <h3 class="title-big">Checkout our available menu</h3>
                            </div>
                            <div class="row team-row mt-md-5 mt-5">
                                @foreach ($pizzas as $pizza)
                                    <a href="{{ route('iteminfo', ['itemslug' => $pizza->slug]) }}">
                                        <div class="col-lg-3 col-6 team-wrap">
                                            <div class="team-member text-center">
                                                <div class="team-img">
                                                    <img src="{{ asset('upload/' . $pizza->image) }}" alt=""
                                                        class="radius-image h-60">
                                                    <div class="overlay-team">
                                                        <div class="team-details text-center">
                                                            <div class="p-2">
                                                                <a href="{{ route('iteminfo', ['itemslug' => $pizza->slug]) }}" class="rounded">
                                                                    <span
                                                                        class="rounded-full text-sm px-5 bg-yellow-500 p-4 text-gray-800 hover:bg-opacity-75">Buy
                                                                        Now</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="{{ route('iteminfo', ['itemslug' => $pizza->slug]) }}" class="team-title">{{ $pizza->item_name }}</a>
                                                <p class="text-red-500 font-bold">{{ '₦' . $pizza->price }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                                <!-- end team member -->
                            </div>
                        </div>
                </section>

                <section class="w3l-team-main tab-content text-left" id="content2">
                    <div class="team py-5">
                        <div class="container py-lg-5">
                            <div class="title-content text-center">
                                <h6 class="title-small">Our Chefs are Experts and skillful</h6>
                                <h3 class="title-big">Checkout our available menu</h3>
                            </div>
                            <div class="row team-row mt-md-5 mt-5">
                                @foreach ($burgers as $burger)
                                <div class="col-lg-3 col-6 team-wrap">
                                    <div class="team-member text-center">
                                        <div class="team-img">
                                            <img src="{{ asset('upload/' . $burger->image) }}" alt="" class="radius-image h-60">
                                            <div class="overlay-team">
                                                <div class="team-details text-center">
                                                    <div class="p-2">
                                                        <a href="{{ route('iteminfo', ['itemslug' => $burger->slug]) }}" class="rounded">
                                                            <span class="rounded-full text-sm px-5 bg-yellow-500 p-4 text-gray-800 hover:bg-opacity-75">Buy Now</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('iteminfo', ['itemslug' => $burger->slug]) }}" class="team-title">{{ $burger->item_name }}</a>
                                        <p class="text-red-500 font-bold">{{ '₦' . $burger->price }}</p>
                                    </div>
                                </div>
                                
                                @endforeach
                                <!-- end team member -->
                            </div>
                        </div>
                        <div>
                </section>

                <section class="w3l-team-main tab-content text-left" id="content3">
                    <div class="team py-5">
                        <div class="container py-lg-5">
                            <div class="title-content text-center">
                                <h6 class="title-small">Our Chefs are Experts and skillful</h6>
                                <h3 class="title-big">Checkout our available menu</h3>
                            </div>
                            <div class="row team-row mt-md-5 mt-5">
                                @foreach ($beverages as $beverage)
                                    <a href="{{ route('iteminfo', ['itemslug' => $beverage->slug]) }}">
                                        <div class="col-lg-3 col-6 team-wrap">
                                            <div class="team-member text-center">
                                                <div class="team-img">
                                                    <img src="{{ asset('upload/' . $beverage->image) }}" alt=""
                                                        class="radius-image h-60">
                                                    <div class="overlay-team">
                                                        <div class="team-details text-center">
                                                            <div class="p-2">
                                                                <a href="{{ route('iteminfo', ['itemslug' => $beverage->slug]) }}" class="rounded">
                                                                    <span
                                                                        class="rounded-full text-sm px-5 bg-yellow-500 p-4 text-gray-800 hover:bg-opacity-75">Buy
                                                                        Now</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="{{ route('iteminfo', ['itemslug' => $beverage->slug]) }}" class="team-title">{{ $beverage->item_name }}</a>
                                                <p class="text-red-500 font-bold">{{ '₦' . $beverage->price }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end team member -->
                </section>
            </div>
        </div>
    </div>
    <!-- menu block -->
@endsection
<!-- footer -->
