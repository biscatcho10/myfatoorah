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
            "InvoiceValue" => 150,
            // "DisplayCurrencyIso" => "kwd",
            // 'MobileCountryCode'  => '+966',
            // 'CustomerMobile'     =>  $phone,
            // "Language" => "en",
            "CallBackUrl" => route('callback'),
            "ErrorUrl" => route('error'),
        ];

     return   $this->fatoorahService->sendPayment($data);
    }
}
