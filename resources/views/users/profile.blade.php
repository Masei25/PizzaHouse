@extends('layouts.layout')

@section('title', 'Profile / Pizza House')

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
        <h2 class="text-3xl item-center flex justify-center font-medium uppercase mb-4">User Profile</h2>

        <form action="" method="POST" class="flex flex-col justify-center space-y-3">
            @csrf

            @error('firstname')
                <p class="text-red-800 text-sm">{{ $message }}</p>
            @enderror
            <label for="firstname">First Name </label>
            <input type="text" name="firstname" id="firstname" value="{{ $user->firstname }}"
                class="rounded p-2 bg-gray-100 focus:border-yellow-200">

            @error('lastname')
                <p class="text-red-800 text-sm">{{ $message }}</p>
            @enderror
            <label for="image">Last Name </label>
            <input type="text" name="lastname" id="lastname" value="{{ $user->lastname }}"
                class="rounded p-2 bg-gray-100 focus:border-yellow-200">

            @error('email')
                <p class="text-red-800 text-sm">{{ $message }}</p>
            @enderror
            <label for="image">Email </label>
            <input type="text" name="firstname" id="firstname" value="{{ $user->email }}"
                class="rounded p-2 bg-gray-100 focus:border-yellow-200" disabled>

            @error('user_type')
                <p class="text-red-800 text-sm">{{ $message }}</p>
            @enderror
            <label for="user_type">User Type </label>
            <input type="text" name="user_type" id="user_type" value="{{ $user->user_type }}"
                class="rounded p-2 bg-gray-100 focus:border-yellow-200" disabled>

            @if ($user->user_type == 'seller')
                @error('business_name')
                    <p class="text-red-800 text-sm">{{ $message }}</p>
                @enderror
                <label for="image">Business Name </label>
                <input type="text" name="business_name" id="business_name" value="{{ $user->business_name }}"
                    class="rounded p-2 bg-gray-100 focus:border-yellow-200">
            @endif




            <div class="flex justify-center">
                <button type="submit" class="bg-yellow-500 text-gray-100 p-2 rounded w-1/2">Update</button>
            </div>
        </form>

    </div>

@endsection
