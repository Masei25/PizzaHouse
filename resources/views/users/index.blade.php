@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')
    <section class="w3l-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-3">
                <p class="title"> Welcome <span
                        class="text-yellow-400">{{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}</span>
                </p>
            </div>
        </div>
    </section>

    <div class="container py-5 flex md:w-1/2 space-x-4">
        <div class="bg-green-200 p-2 grid grid-col justify-items-center rounded lg:w-40">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 lg:w-8 lg:h-8" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                <path
                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                <path
                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
            </svg>
            <p class="font-medium lg:text-2xl text-gray-500">20</p>
            <p class="mt-1 text-xs lg:text-sm text-gray-400 text-center">Total Orders</p>
        </div>
        <div class="bg-red-200 p-2 grid grid-col justify-items-center rounded lg:w-40">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 lg:w-8 lg:h-8" viewBox="0 0 16 16">
                <path
                    d="M7.27 2.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v3a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-3H1.654C.78 10.5.326 9.455.924 8.816L7.27 2.047z" />
            </svg>
            <p class="font-medium lg:text-2xl text-gray-500">{{ count($items) }}</p>
            <p class="mt-1 text-xs lg:text-sm text-gray-400 text-center">Items Added</p>
        </div>
        <div class="bg-yellow-200 p-2 grid grid-col justify-items-center rounded lg:w-40">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 lg:w-8 lg:h-8" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                <path fill-rule="evenodd"
                    d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
            </svg>
            <p class="font-medium lg:text-2xl text-gray-500">20</p>
            <h6 class="text-xs lg:text-sm text-gray-400 text-center">Total Customers</h6>
        </div>
        <div class="bg-blue-200 p-2 grid grid-col justify-items-center rounded lg:w-40">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 lg:w-8 lg:h-8" viewBox="0 0 16 16">
                <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z" />
            </svg>
            <p class="font-medium lg:text-2xl text-gray-500">20</p>
            <p class="mt-1 text-xs lg:text-sm text-gray-400 text-center">Revenue</p>
        </div>
    </div>

    <div class="container">
        <div class="mx-4 my-10">
            <div class="mb-3">
                @if (Session::has('success'))
                    <p class="text-green-700">{{ Session::get('success') }}</p>
                @endif
            </div>
            <p class="text-lg font-medium">Items Added</p>
            <div class="flex justify-end w-full mt-5">
                <form action="" class="hidden lg:block lg:space-y-0">
                    <select id="type" name="type"
                        class="p-1.5 text-gray-500 rounded-md outline-none border focus:border-orange-400">
                        <option value="" disabled selected>Select Category</option>
                        <option value="firstname">Firstname</option>
                        <option value="lastname">Lastname</option>
                        <option value="email">Email</option>
                    </select>
                    <input type="text" name="search"
                        class="p-1.5 text-gray-500 rounded-md border border-gray-300 outline-none focus:border-orange-500">
                    <button
                        class="p-1.5 rounded-md bg-yellow-500 text-gray-100 outline-none hover:bg-yellow-600">Search</button>
                </form>
            </div>
            <div>
                <div class="mt-4 rounded-lg">
                    <table class="w-full border-collapse rounded-lg">
                        <thead>
                            <tr class="bg-red-300">
                                <th
                                    class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                    Item Name</th>
                                <th
                                    class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                    Item Type</th>
                                <th
                                    class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                    Price</th>
                                <th
                                    class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                    Available Quantity</th>
                                <th
                                    class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                    Created At</th>
                                <th
                                    class="hidden p-3 text-sm font-medium text-left text-gray-600 bg-gray-100 border border-gray-300 lg:table-cell">
                                    Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr
                                    class="flex flex-row flex-wrap mb-10 bg-white lg:hover:bg-gray-100 lg:table-row lg:flex-row lg:flex-no-wrap lg:mb-0">
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Item
                                            Name
                                        </span>
                                        <a class="hover:text-gray-400">
                                            <span
                                                class="flex justify-end text-left lg:block">{{ $item->item_name }}<span></a>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Item
                                            Type</span>
                                        <a class="hover:text-gray-400">
                                            <span
                                                class="flex justify-end text-left lg:block">{{ $item->item_type }}<span></a>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Price
                                            Name</span>
                                        <span class="flex justify-end text-left lg:block">{{ $item->price }}</span>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Available
                                            Quantity</span>
                                        <span class="flex justify-end text-left lg:block">{{ $item->quantity }}</span>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Created
                                            At</span>
                                        <span
                                            class="flex justify-end text-left lg:block">{{ $item->created_at->format('m-d-Y - h:i:s') }}</span>
                                    </td>
                                    <td
                                        class="relative block w-full p-3 text-center text-gray-800 border border-b lg:w-auto lg:table-cell lg:static">
                                        <span
                                            class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Action
                                            </span>
                                        <span class="flex justify-center space-x-3 text-left">
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="text-blue-600" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                            </a>
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-red-700" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
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
        </div>
    </div>
@endsection
