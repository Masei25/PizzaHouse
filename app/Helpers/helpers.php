<?php

use App\Models\Transactions;

function updateTransaction() {
    Transactions::create([
        'order_number' => $order_id,
        'amount' => $amount,
        'charged_amount' => $amountCharged,
        'trans_id' => $res->data->id,
        'trans_ref' => $res->data->tx_ref,
        'flw_ref' => $res->data->flw_ref
    ]);
}
