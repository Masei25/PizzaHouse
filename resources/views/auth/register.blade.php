@extends('layouts.layout')

@section('title', 'Register / Pizza House')

@section('content')
    <section class="w3l-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-3">
                <h2 class="title">Register</h2>
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
                            <h3 class="title-big">Sign up with us</h3>
                            <p class="mb-4 mt-lg-0 mt-2">Required fields are marked *</p>

                            <form action="" method="post" class="text-right">
                                @csrf
                                <div class="w-1/2 space-y-3">
                                    @error('firstname')
                                        <p class="text-red-800 text-sm">{{ $message }}</p>
                                    @enderror
                                    <input type="text" name="firstname" id="firstname" placeholder="First Name*"
                                        class="border p-2 rounded-md">

                                    @error('lastname')
                                        <p class="text-red-800 text-sm">{{ $message }}</p>
                                    @enderror
                                    <input type="text" name="lastname" id="lastname" placeholder="Last Name*"
                                        class="border p-2 rounded-md">

                                    @error('user_type')
                                        <p class="text-red-800 text-sm">{{ $message }}</p>
                                    @enderror
                                    <select name="user_type" id="user_type" class="border rounded-md bg-gray-100 p-2 w-full"
                                        onchange="toggleBusinessNameInput()">
                                        <option selected disabled class="font-bold">Select a user type*</option>
                                        <option value="seller">Seller</option>
                                        <option value="buyer">Buyer</option>
                                    </select>

                                    @error('business_name')
                                        <p class="text-red-800 text-sm">{{ $message }}</p>
                                    @enderror
                                    <input type="text" name="business_name" id="business_name"
                                        placeholder="Business Name*" class="border p-2 rounded-md" style="display: none;">
                                    <!-- Initially hidden -->

                                    @error('email')
                                        <p class="text-red-800 text-sm">{{ $message }}</p>
                                    @enderror
                                    <input type="email" name="email" id="email" placeholder="Email*"
                                        class="border p-2 rounded-md">

                                    @error('password')
                                        <p class="text-red-800 text-sm">{{ $message }}</p>
                                    @enderror
                                    <input type="password" name="password" id="password" placeholder="Password*"
                                        class="border p-2 rounded-md">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        placeholder="Confirm Password" class="border p-2 rounded-md">
                                </div>
                                <button type="submit"
                                    class="btn btn-primary btn-style mt-3 flex justify-left p-2 rounded-md">Submit</button>
                            </form>

                            <script>
                                function toggleBusinessNameInput() {
                                    var userTypeSelect = document.getElementById('user_type');
                                    var businessNameInput = document.getElementById('business_name');

                                    if (userTypeSelect.value === 'business') {
                                        businessNameInput.style.display = 'block'; // Show the input
                                    } else {
                                        businessNameInput.style.display = 'none'; // Hide the input
                                    }
                                }
                            </script>




                        </div>
                        <div class="col-lg-4 cont-details">
                            <address>
                                <h5 class="mt-md-5 mt-4">Contact Address</h5>
                                <p><span class="fa fa-map-marker"></span>Burger Bun, 208 Trainer Avenue, London, UK. </p>
                                <p> <a href="mailto:info@example.com"><span
                                            class="fa fa-envelope"></span>info@pizzahouse.com</a></p>
                                <p><span class="fa fa-phone"></span><a href="tel:+12 5348943649"> +4412345678</a></p>

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
