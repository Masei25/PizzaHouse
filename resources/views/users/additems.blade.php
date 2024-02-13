@extends('layouts.layout')

@section('title', 'Add Items / Pizza House')

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
                <option value="" disabled selected>Select Item *</option>
                <option value="pizza">Pizza</option>
                <option value="burger">Burger</option>
                <option value="beverages">Beverages</option>
            </select>
            <input type="text" name="item_name" id="item_name" placeholder="Item Name / Description *"
                class="rounded p-2 bg-gray-100 focus:border-yellow-200">
            <input type="text" name="price" id="price" placeholder="Item Price *"
                class="rounded p-2 bg-gray-100 focus:border-yellow-200">
            <label for="image">Available Quantity *</label>
            <input type="number" name="quantity" id="quantity"
                class="rounded p-2 bg-gray-100 focus:border-yellow-200">
            <label for="image">Upload item image *</label>
            <input type="file" name="image" accept="image/*" id="image"
                class="rounded p-2 bg-gray-100 focus:border-yellow-200">
            <div class="flex justify-center">
                <button type="submit" class="bg-yellow-500 text-gray-100 p-2 rounded w-1/2">Submit</button>
            </div>
        </form>

    </div>

@endsection
