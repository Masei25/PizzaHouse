@extends('layouts.layout')

@section('title', 'Menu / Pizza House')

@section('content')
    <section class="w3l-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-3">
                <h2 class="title">Item info</h2>
            </div>
        </div>
    </section>

    <section class="w3l-aboutblock1" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                @if (Session::has('success'))
                    <p class="p-2 flex justify-center text-green-700 font-medium text-base">{{ Session::get('success') }}</p>
                @endif
                <div class="lg:flex items-center">
                    <div class="lg:w-1/2 lg:mr-8">
                        <img src="{{ asset('upload/' . $item->image) }}" alt="{{ $item->item_name }}" class="rounded-md">
                    </div>
                    <div class="lg:w-1/2">
                        <div>
                            <h3 class="title-big text-4xl">{{ $item->item_name }}</h3>
                        </div>
                        <div>
                            <p class="text-red-500 font-medium text-2xl">{{ '₦' . $item->price }}</p>
                        </div>
                        <div class="flex flex-col mt-4">
                            <label for="quantity" class="text-lg">Qty</label>
                            <input type="number" name="quantity" id="quantity" min="1" placeholder="1" class="w-16 bg-white p-1 border-2 text-gray-700 font-medium rounded">
                        </div>
                        <div class="flex items-center mt-4">
                            <span class="text-gray-500">Seller:</span>
                            <span class="ml-2">{{ $seller->business_name ?? 'N/A' }}</span>
                        </div>
                        <div class="space-x-4 py-5">
                            <a href="{{ route('addcart', $item->id) }}" class="border-2 border-gray-400 p-2 px-4 cursor-pointer">Add to Cart</a>
                            <a href="{{ route('checkout', $item->slug) }}" class="bg-green-400 border-2 border-green-400 p-2 px-4 cursor-pointer hover:text-gray-100">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

@endsection
<!-- footer -->
