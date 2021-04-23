<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <title>Checkout / Pizza House</title>
</head>

<body>
    <section>
        <div class="lg:grid grid-cols-2">
            <div class="p-10">
                <a href="/" class="font-medium text-2xl">Pizza House</a>
                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    <div class="mt-3">
                        @if (Session::has('error'))
                            <p class="text-red-600 font-medium">{{ Session::get('error') }}</p>
                        @endif
                        @if (Session::has('success'))
                            <p class="text-green-600 font-medium">{{ Session::get('success') }}</p>
                        @endif
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-700 font-medium mb-2">{{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="mt-8 space-y-7">
                        <div class="space-y-3">
                            <p class="text-medium">Contact Information</p>
                            <input type="text" name="email" id="email" placeholder="Email"
                                class="border p-2 w-full rounded outline-none focus:border-blue-300" required>
                        </div>

                        <div class="space-y-3">
                            <p class="text-medium">Shipping Address</p>
                            <div class="lg:grid space-y-3 lg:space-y-0 grid-cols-2 gap-3">
                                <div>
                                    <input type="text" name="firstname" id="firstname" placeholder="First Name"
                                        class="border p-2 w-full rounded outline-none focus:border-blue-300" required>
                                </div>
                                <div>
                                    <input type="text" name="lastname" id="lastname" placeholder="Last Name"
                                        class="border p-2 w-full rounded outline-none focus:border-blue-300" required>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <input type="text" name="address" id="address" placeholder="Address"
                                    class="border p-2 w-full rounded outline-none focus:border-blue-300" required>
                                <input type="text" name="apartment" id="apartment"
                                    placeholder="Apartment, suite, etc. (optional)"
                                    class="border p-2 w-full rounded outline-none focus:border-blue-300">
                                <input type="text" name="city" id="city" placeholder="City / Town"
                                    class="border p-2 w-full rounded outline-none focus:border-blue-300" required>
                            </div>
                            <div class="lg:grid space-y-3 lg:space-y-0 grid-cols-3 gap-3">
                                <div>
                                    <select name="country" id="country"
                                        class="crs-country border p-2 w-full rounded outline-none focus:border-blue-300"
                                        data-region-id="one" data-whitelist="NG"></select>
                                </div>
                                <div>
                                    <select name="state" id="one"
                                        class="border p-2 w-full rounded outline-none focus:border-blue-300"
                                        data-blank-option="Select Region">
                                    </select>
                                </div>
                                <div>
                                    <input type="text" name="postal" id="postal" placeholder="Postal code"
                                        class="border p-2 w-full rounded outline-none focus:border-blue-300" required>
                                </div>
                            </div>
                            <div>
                                <input type="text" name="phone" id="phone" placeholder="Phone"
                                    class="border p-2 w-full rounded outline-none focus:border-blue-300" required>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <p class="text-medium">Payment Method</p>
                            <p class="text-gray-600 text-sm">All transactions are secure and encrypted.</p>
                            <select name="payment" id="payment"
                                class="border p-2 w-48 rounded outline-none focus:border-blue-300">
                                <option value="cash" disabled selected>Select payment type</option>
                                <option value="pay_on_delivery">Pay on Delivery</option>
                                <option value="card">Card Payment</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 flex justify-end">
                        <input type="submit" value="Complete Order" placeholder="Email"
                            class="border p-2 bg-blue-600 w-40 text-gray-100 rounded outline-none focus:border-blue-300 cursor-pointer"
                            required>
                    </div>
                </form>
            </div>

            <div class="bg-gray-100">
                <div class="p-10 space-y-4">
                    @foreach ($cartitems as $cartitem)
                        <div class="flex justify-between border-b">
                            <div>
                                <div class="flex space-x-2">
                                    <img src="{{ asset('upload/' . $cartitem->attributes['image']) }}" alt=""
                                        class="radius-image rounded-lg w-10 h-10">
                                    <div>
                                        <p class="text-gray-600 font-light">{{ $cartitem->name }}</p>
                                        <p class="text-gray-600 font-light text-sm">Qty: {{ $cartitem->quantity }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-7">
                                ₦{{ $cartitem->price }}
                            </div>
                        </div>
                    @endforeach
                    <div>
                        <div class="mt-4 rounded-lg lg:flex justify-end">
                            <table class="border-collapse rounded-lg w-full lg:w-1/2">
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
                                                    <p class="text-sm flex justify-end mr-5 text-green-400">₦
                                                        {{ Cart::session('guest')->getSubTotal() }}</p>
                                                </div>
                                                <div class="flex justify-between">
                                                    <p class=" text-left lg:block text-sm font-medium">Charges
                                                    <p>
                                                    <p class="text-sm flex justify-center mr-5 text-green-400">₦0
                                                    </p>
                                                </div>
                                                <div class="flex justify-between border-t mb-4">
                                                    <p class=" text-left lg:block text-sm font-medium mt-3">Total
                                                    <p>
                                                    <p class="text-sm flex justify-center mr-5 text-green-400 mt-3">
                                                        ₦ {{ Cart::session('guest')->getTotal() }}</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/crs.min.js') }}"></script>
</body>

</html>
