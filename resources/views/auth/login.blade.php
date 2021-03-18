@extends('layouts.layout')

@section('title', 'Login / Pizza House')

@section('content')
    <section class="w3l-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-3">
                <h2 class="title">Login</h2>
            </div>
        </div>
    </section>
    <!-- contacts -->
    <section class="w3l-contact-7 py-5" id="contact">
        <div class="contacts-9 py-lg-5 py-md-4">
            <div class="container">
                <div class="top-map">
                    <div class="row map-content-9">
                        <div class="col-lg-8">
                            <h3 class="title-big">Login</h3>
                            <p class="mb-4 mt-lg-0 mt-2">Required fields are marked *</p>
                            <div class="mb-3">
                                @if (Session::has('error'))
                                    <p class="text-red-600">{{ Session::get('error') }}</p>
                                @endif
                            </div>
                            <div class="mb-3">
                                @if (Session::has('success'))
                                    <p class="text-green-600">{{ Session::get('success') }}</p>
                                @endif
                            </div>
                            <form action="" method="post" class="text-right">
                                @csrf
                                <div class="w-1/2 space-y-5">
                                    <input type="text" name="email" id="email" placeholder="Email*" required="">
                                    <input type="password" name="password" id="password" placeholder="Password*" required>
                                </div>
                                <button type="submit"
                                    class="btn btn-primary btn-style mt-3 flex justify-left">Submit</button>
                            </form>
                        </div>
                        <div class="col-lg-4 cont-details">
                            <address>
                                <h5 class="mt-md-5 mt-4">Contact Address</h5>
                                <p><span class="fa fa-map-marker"></span>Burger Bun, 208 Trainer Avenue street, Corner
                                    Market, NY - 62617. </p>
                                <p> <a href="mailto:info@example.com"><span
                                            class="fa fa-envelope"></span>info@example.com</a></p>
                                <p><span class="fa fa-phone"></span><a href="tel:+12 5348943649"> +12 534894364</a></p>

                                <h5 class="mt-4 mb-3">Opening Hours</h5>
                                <div class="hours">
                                    <p><span class="fa fa-clock-o"></span>10:00am - 09:00pm</p>
                                    <p>Sunday Closed</p>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contacts -->
@endsection
