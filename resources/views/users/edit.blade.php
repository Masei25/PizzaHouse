@extends('layouts.layout')

@section('title', 'Edit Items / Pizza House')

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

    <div class="container py-5 flex justify-center md:w-1/2 space-x-4">
        <div class="bg-green-200 p-2 grid grid-col justify-items-center rounded lg:w-40">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 lg:w-8 lg:h-8" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                <path
                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                <path
                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
            </svg>
            <p class="font-medium lg:text-2xl text-gray-500">0</p>
            <p class="mt-1 text-xs lg:text-sm text-gray-400 text-center">Total Orders</p>
        </div>
        <div class="bg-red-200 p-2 grid grid-col justify-items-center rounded lg:w-40">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 lg:w-8 lg:h-8" viewBox="0 0 16 16">
                <path
                    d="M7.27 2.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v3a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-3H1.654C.78 10.5.326 9.455.924 8.816L7.27 2.047z" />
            </svg>
            <p class="font-medium lg:text-2xl text-gray-500">0</p>
            <p class="mt-1 text-xs lg:text-sm text-gray-400 text-center">Items Added</p>
        </div>
        <div class="bg-yellow-200 p-2 grid grid-col justify-items-center rounded lg:w-40">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 lg:w-8 lg:h-8" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                <path fill-rule="evenodd"
                    d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
            </svg>
            <p class="font-medium lg:text-2xl text-gray-500">0</p>
            <h6 class="text-xs lg:text-sm text-gray-400 text-center">Total Customers</h6>
        </div>
        <div class="bg-blue-200 p-2 grid grid-col justify-items-center rounded lg:w-40">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 lg:w-8 lg:h-8" viewBox="0 0 16 16">
                <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z" />
            </svg>
            <p class="font-medium lg:text-2xl text-gray-500">0</p>
            <p class="mt-1 text-xs lg:text-sm text-gray-400 text-center">Revenue</p>
        </div>
    </div>

    <div class="container lg:w-2/6 py-5">
        <h2 class="text-3xl item-center flex justify-center font-medium uppercase mb-4">Add an items</h2>
        <div class="flex flex-col justify-center">
            @if ($errors->all())
                <ul class="flex flex-col justify-center">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-800 flex flex-col justify-center">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form action="" method="POST" class="flex flex-col justify-center space-y-3" enctype="multipart/form-data">
            @csrf
            <select id="type" name="type" class="rounded p-2 bg-gray-100 focus:border-yellow-200">
                <option value="{{$item->item_type}}" disabled selected>{{$item->item_type }}</option>
                <option value="pizza">Pizza</option>
                <option value="burger">Burger</option>
                <option value="beverages">Beverages</option>
            </select>
            <input type="text" name="item_name" id="item_name" placeholder="Item Name / Description *" value="{{$item->item_name}}"
                class="rounded p-2 bg-gray-100 focus:border-yellow-200">
            <input type="text" name="price" id="price" placeholder="Item Price *" value="{{$item->price}}"
                class="rounded p-2 bg-gray-100 focus:border-yellow-200">
            <label for="image">Available Quantity *</label>
            <input type="number" name="quantity" id="quantity" value="{{$item->quantity}}"
                class="rounded p-2 bg-gray-100 focus:border-yellow-200">
            <label for="image">Upload item image *</label>
            <input type="file" name="image" accept="image/*" id="image" value="{{$item->image}}"
                class="rounded p-2 bg-gray-100 focus:border-yellow-200">
            <div class="flex justify-center">
                <button type="submit" class="bg-yellow-500 text-gray-100 p-2 rounded w-1/2">Submit</button>
            </div>
        </form>

    </div>

@endsection
