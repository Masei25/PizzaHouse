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
                <div class="lg:grid grid-cols-2 gap-4">
                    <div>
                        <img src="{{ asset('upload/' . $item->image) }}" alt="" class="rounded-md">
                    </div>
                    <div action="" class="mx-3 space-y-2">
                        <div>
                            <h3 class="title-big text-4xl">{{ $item->item_name }}</h3>
                        </div>
                        <div>
                            <p class="text-red-500 font-medium text-2xl">{{ '₦' . $item->price }}</p>
                        </div>
                        <div class="flex flex-col mt-4">
                            <label for="quantity" class="text-lg">Qty</label>
                            <input type="number" name="quanity" id="quantiy" min="1" placeholder="1" class="w-16 bg-white p-1 border-2 text-gray-700 font-medium rounded ">
                        </div>
                        <div class="space-x-4 py-5">
                            <a href="" class="border-2 border-gray-400 p-2 px-4 cursor-pointer">
                                Add to Cart
                            </a>
                            <a href="" class="bg-green-400 border-2 border-green-400 p-2 px-4 cursor-pointer hover:text-gray-100">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
<!-- footer -->
