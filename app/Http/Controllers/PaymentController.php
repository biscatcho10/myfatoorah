<?php

namespace App\Http\Controllers;

use App\Services\MyfatoorahService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    private $fatoorahService;
    public function __construct(MyfatoorahService $fatoorahService)
    {
        $this->fatoorahService = $fatoorahService;
    }

    public function payOrder()
    {
        $data = [
            "CustomerName" => "karim osama",
            "NotificationOption" => "LNK",
            "CustomerEmail" => "karimosama1041997@gmail.com",
            "InvoiceValue" => 100,
            "DisplayCurrencyIso" => "kwd",
            "CallBackUrl" => route('callback'),
            "ErrorUrl" => route('error'),
            "Language" => "en",
        ];

        $this->fatoorahService->sendPayment($data);
    }
}
