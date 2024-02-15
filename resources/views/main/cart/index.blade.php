@extends('layouts.layout')

@section('title', 'Cart / Pizza House')

@section('content')
    <section class="w3l-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-3">
                <h2 class="title">Cart</h2>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="mx-4 my-10">
            <p class="text-4xl flex justify-center font-medium">Shopping Cart</p>
            @if (Session::has('success'))
                <p class="flex items-center justify-center text-green-700 font-medium text-base p-3">
                    {{ Session::get('success') }}</p>
            @endif
            @if (count(\Cart::session('guest')->getContent()) == null)
                <div class="flex justify-center">
                    <div class="items-center mt-6 p-10 space-y-6">
                        <p>Your cart is currently empty.</p>
                        <div class="flex justify-center">
                            <a href="{{ route('menu') }}" class="p-2 bg-green-400 text-gray-100">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            @else
                <div>
                    <div class="mt-4 rounded-lg">
                        <table class="w-full border-collapse rounded-lg">
                            <thead>
                                <tr class="bg-red-300">
                                    <th
                                        class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                        Item Image</th>
                                    <th
                                        class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                        Item</th>
                                    <th
                                        class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                        Price</th>
                                    <th
                                        class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                        Quantity</th>
                                    <th
                                        class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                        Total</th>
                                    <th
                                        class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300">
                                        Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartitems as $cartitem)
                                    <tr
                                        class="flex flex-row flex-wrap mb-10 bg-white lg:hover:bg-gray-100 lg:table-row lg:flex-row lg:flex-no-wrap lg:mb-0">
                                        <td
                                            class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                            <span
                                                class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">

                                            </span>
                                            <a class="hover:text-gray-400">
                                                <div class="flex justify-center items-center space-x-3">
                                                    <a href="{{ route('cart.delete', $cartitem->id) }}" class="border-2 rounded-full hidden lg:block">
                                                        <svg class="w-6 h-6 text-red-700" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                    </a>
                                                    <img src="{{ asset('upload/' . $cartitem->attributes['image']) }}"
                                                        alt="" class="radius-image rounded-lg w-10 h-10">

                                                <div>

                                            </a>
                                        </td>
                                        <td
                                            class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                            <span
                                                class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Item
                                            </span>
                                            <a class="hover:text-gray-400">
                                                <span
                                                    class="flex justify-end text-left lg:block">{{ $cartitem->name }}<span></a>
                                        </td>
                                        <td
                                            class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                            <span
                                                class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Price
                                            </span>
                                            <span
                                                class="flex justify-end text-left lg:block">{{ $cartitem->price }}</span>
                                        </td>
                                        <td
                                            class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                            <span
                                                class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">
                                                Quantity</span>
                                                <span class="flex justify-end text-left lg:block">
                                                    <form action="{{ route('cart.update', $cartitem->id) }}" class="flex space-x-4" id="updateForm">
                                                        <input type="number" name="quantity" id="quantity" value="{{ $cartitem->quantity }}" class="border p-0.5 items-center text-center w-20">
                                                       
                                                    </form>
                                                </span>
                                        </td>
                                        <td
                                            class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                            <span
                                                class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Total
                                            </span>
                                            <span
                                                class="flex justify-end text-left lg:block">{{ Cart::session('guest')->get($cartitem->id)->getPriceSum() }}</span>
                                        </td>
                                        <td
                                            class="relative block w-full p-3 text-center text-gray-800 border border-b lg:hidden">
                                            <span
                                                class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Action
                                            </span>
                                            <span class="flex justify-center space-x-3 text-left items-center">

                                                <a href="{{ route('cart.delete', $cartitem->id) }}" class="border-2 rounded-full">
                                                    <svg class="w-6 h-6 text-red-700" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="mt-3 lg:flex space-y-3 lg:space-y-0 justify-between">
                    <form action="" method="post">
                        <input type="text" name="coupon" id="coupon" class="border p-1 focus:border-blue-200">
                        <input type="submit" name="" id="" value="APPLY COUPON"
                            class="bg-blue-400 p-1.5 text-xs text-gray-100 border-2 border-blue-400 cursor-pointer hover:bg-blue-500 hover:border-blue-500 mt-2 lg:mt-0">
                    </form>
                </div>

                <div>
                    <div class="mt-4 rounded-lg lg:flex justify-end">
                        <table class="border-collapse rounded-lg w-full lg:w-1/3">
                            <thead>
                                <tr class="bg-red-300">
                                    <th
                                        class="hidden p-3 text-sm font-medium text-center text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                        Cart Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="lg:flex flex-row flex-wrap mb-5 bg-white lg:hover:bg-gray-100 lg:table-row lg:flex-row lg:flex-no-wrap lg:mb-0">
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Cart
                                            Total
                                        </span>
                                        <div class="lg:flex flex-col space-y-4">
                                            <div class="flex mt-2 justify-between">
                                                <p class="text-left lg:block text-sm font-medium">Subtotal
                                                <p>
                                                <p class="text-sm flex justify-end mr-5 font-medium text-green-400">₦
                                                    {{ Cart::session('guest')->getSubTotal() }}</p>
                                            </div>
                                            <div class="flex justify-between">
                                                <p class=" text-left lg:block text-sm font-medium">Discount
                                                <p>
                                                <p class="text-sm flex justify-center mr-5 font-medium text-green-400">₦0
                                                </p>
                                            </div>
                                            <div class="flex justify-between border-t mb-4">
                                                <p class=" text-left lg:block text-sm font-medium mt-3">Total
                                                <p>
                                                <p
                                                    class="text-sm flex justify-center mr-5 font-medium text-green-400 mt-3">
                                                    ₦ {{ Cart::session('guest')->getTotal() }}</p>
                                            </div>
                                        </div>
                                        <a href="{{ route('checkout') }}"
                                            class="bg-blue-400 mt-4 p-2 text-white hover:bg-blue-500 cursor-pointer uppercase text-xs">Proceed
                                            to checkout</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection
<!-- footer -->
