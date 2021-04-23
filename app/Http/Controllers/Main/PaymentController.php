<?php

namespace App\Http\Controllers\Main;

use App\Models\Orders;
use Darryldecode\Cart\Cart;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaymentController extends Controller
{
    protected static function ravePay(Request $request, Response $response)
    {
        $url = request('status');

        $order_id = $request->url();
        $order_id = explode('/', $order_id);
        $order_id = end($order_id);

        if($url == 'cancelled') {
            Orders::where('order_number', $order_id)
                    ->update(['status' => 'cancelled']);

            return Redirect::route('checkout')->with('error', 'Payment Cancelled!!!');
        }

        if($url == 'successful') {
            $trans_id = request('transaction_id');

            $res = paymentValidation($trans_id);

            if($res->status == 'success') {
                $amount = $res->data->charged_amount;
                $amountCharged = $res->data->meta->price;
                if($amount >= $amountCharged)
                {
                    updateTransaction();

                    Orders::where('order_number', $order_id)
                    ->update([
                        'status' => 'successful',
                        'is_paid' => true
                    ]);

                    return view('main.cart.checkout', [
                        'order_number' => $order_id,
                    ]);
                }

                if(!($amountPaid >= $amountCharged))
                {
                    updateTransaction();

                    Orders::where('order_number', $order_id)
                    ->update(['status' => 'amount conflict']);

                    return Redirect::route('checkout')->with('error', 'Transaction Failed!!!');
                }
            }

            return Redirect::route('checkout')->with('error', 'Transaction Failed!!!');
        }
    }
}
