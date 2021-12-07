<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payOrder()
    {
        $data = [
            "CustomerName"=> "karim osama",
            "NotificationOption"=> "LNK",
            "CustomerEmail"=> "karimosama1041997@gmail.com",
            "InvoiceValue"=> 100,
            "DisplayCurrencyIso"=> "kwd",
            "CallBackUrl"=> route('callback'),
            "ErrorUrl"=> route('error'),
            "Language"=> "en",
        ];
    }
}
