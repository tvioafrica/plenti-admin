<?php

namespace App\Models;

use App\Models\User;


class TransactionRequest
{
    public int $amount_spent;
    public String $payment_method = "Loyalty";
    public String $ref = "POS";
    public int $commission = 2;
    public String $status = "not paid";
    public  User $branch;
    public int $customer_id;
    public int $creds;
    public String $entry = "";
    public String $reason = "";
    public String $network ="";
    public string $transaction_type;
}
