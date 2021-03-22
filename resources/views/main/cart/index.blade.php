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
            <div class="mb-3">
                @if (Session::has('success'))
                    <p class="text-green-700">{{ Session::get('success') }}</p>
                @endif
            </div>
            <p class="text-lg font-medium">Cart</p>
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
                                    class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                    Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($items as $item) --}}
                                <tr
                                    class="flex flex-row flex-wrap mb-10 bg-white lg:hover:bg-gray-100 lg:table-row lg:flex-row lg:flex-no-wrap lg:mb-0">
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Item
                                            Image
                                        </span>
                                        <a class="hover:text-gray-400">
                                            <span
                                                class="flex justify-end text-left lg:block"> item<span></a>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Item
                                            </span>
                                        <a class="hover:text-gray-400">
                                            <span
                                                class="flex justify-end text-left lg:block">Item<span></a>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Price
                                            </span>
                                        <span class="flex justify-end text-left lg:block">Item</span>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">
                                            Quantity</span>
                                        <span class="flex justify-end text-left lg:block">Item</span>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Total
                                            </span>
                                        <span
                                            class="flex justify-end text-left lg:block">item</span>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Action
                                            </span>
                                        <span class="flex justify-center space-x-3 text-left">

                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-700" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="mt-3 flex justify-between">
                <form action="" method="post">
                    <input type="text" name="coupon" id="coupon" class="border p-1 focus:border-blue-200">
                    <input type="submit" name="" id="" value="APPLY COUPON" class="bg-blue-400 p-1.5 text-xs text-gray-100 border-2 border-blue-400 cursor-pointer hover:bg-blue-500 hover:border-blue-500">
                </form>

                <div>
                    <input type="submit" name="" id="" value="UPDATE CART" class="bg-blue-400 p-1.5 text-xs text-gray-100 border-2 border-blue-400 cursor-pointer hover:bg-blue-500 hover:border-blue-500">
                </div>
            </div>

            <div>
                <div class="mt-4 rounded-lg">
                    <table class="w-full border-collapse rounded-lg">
                        <thead>
                            <tr class="bg-red-300">
                                <th
                                    class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                    Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($items as $item) --}}
                                <tr
                                    class="flex flex-row flex-wrap mb-10 bg-white lg:hover:bg-gray-100 lg:table-row lg:flex-row lg:flex-no-wrap lg:mb-0">
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Item
                                            Image
                                        </span>
                                        <a class="hover:text-gray-400">
                                            <span
                                                class="flex justify-end text-left lg:block"> item<span></a>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Item
                                            </span>
                                        <a class="hover:text-gray-400">
                                            <span
                                                class="flex justify-end text-left lg:block">Item<span></a>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Price
                                            </span>
                                        <span class="flex justify-end text-left lg:block">Item</span>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">
                                            Quantity</span>
                                        <span class="flex justify-end text-left lg:block">Item</span>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Total
                                            </span>
                                        <span
                                            class="flex justify-end text-left lg:block">item</span>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Action
                                            </span>
                                        <span class="flex justify-center space-x-3 text-left">

                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-700" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
<!-- footer -->
