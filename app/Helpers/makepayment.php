<?php

function initPayment($amount, $orderId, $customer = [], $meta = [], $customization = [])
{
    //prepare rave request
    $data = [
        'tx_ref' => uniqid(),
        'amount' => $amount,
        'currency' => 'NGN',
        'payment_options' => 'card',
        'redirect_url' => route('pay.status', $orderId),
        'customer' => $customer,
        'meta' => $meta,
        'customizations' => $customization
    ];

    //* Call flutterwave endpoint
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer " . env('FLUTTERWAVE_SECRET_KEY'),
            'Content-Type: application/json'
        ),
    ));

    $content = curl_exec($curl);

    curl_close($curl);

    $res = json_decode($content);
    return $res;
}

// function paymentValidation($trans_id)
// {
//     $curl = curl_init();
//     curl_setopt_array($curl, array(
//         CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$trans_id}/verify",
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_ENCODING => "",
//         CURLOPT_MAXREDIRS => 10,
//         CURLOPT_TIMEOUT => 0,
//         CURLOPT_FOLLOWLOCATION => true,
//         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//         CURLOPT_CUSTOMREQUEST => "GET",
//         CURLOPT_HTTPHEADER => array(
//             "Authorization: Bearer " . env('FLUTTERWAVE_SECRET_KEY'),
//             'Content-Type: application/json'
//         ),
//     ));

//     $response = curl_exec($curl);

//     curl_close($curl);

//     $res = json_decode($response);

//     return $res;
// }
