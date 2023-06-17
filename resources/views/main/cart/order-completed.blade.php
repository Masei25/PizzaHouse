<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style-starter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <title>Order Completed</title>
</head>
<body>
    <section class="container py-16 flex justify-center text-center items-center space-y-3">
        <div class="mt-16 space-y-5">
            <p class="text-2xl font-medium">Order Confirmation</p>
            <p class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="flex justify-center text-green-500" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
            </p>
            <p>Thank you for your order. You will receive a confirmation email shortly</p>
            <p class="font-medium">Your order number is : {{ $order_number }}</p>
            @if ($payment_type == 'pay_on_delivery')
                <div class=" p-3 bg-red-100 border-dashed border-2 border-red-400">
                    <p>Your order has been completed but you have not paid. Payment will be made we on delivery</p>
                </div>
            @endif
            <p class="text-sm">If you have any question about your order, please contact us.</p>
            <p>
                <a href="/" class="text-blue-400">click here to return to home</a>
            </p>
        </div>
    </section>
</body>
</html>
