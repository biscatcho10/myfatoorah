<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class MyfatoorahService
{

    private $base_url;
    private $headers;
    private $request_client;

    public function __construct(Client $request_client)
    {
        $this->request_client = $request_client;
        $this->base_url = config('services.myfatoorah.base_uri');
        $headers = [
            'Content-Type' => 'application/json',
            'authorization' => 'Bearer ' . config('services.myfatoorah.token')
        ];
    }

    // make a request
    public function makeRequest($uri, $method, $body = [])
    {
        $request = new Request($method, $this->base_url . $uri, $this->header);

        if (!$body) {
            return false;
        }

        // send the request
        $response = $this->request_client->send($request, [
            'json' => $body
        ]);

        if ($response->getStatusCode() != 200) {
            return false;
        }

        $response = json_decode($response->getBody(), true);
        return $response;
    }
}
