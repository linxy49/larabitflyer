<?php

namespace Linxy49\LaraBitflyer;

use GuzzleHttp\Client as Guzclient;
use Linxy49\LaraBitflyer\Api;

class Client
{
    protected $_client;

    function __construct($client = null)
    {
        $this->_client = is_null($client)
            ? new Guzclient(['base_uri' => Api::ENDPOINT]) : $client;
    }

    public function getMarkets()
    {
        $response = $this->_client->get(Api::MARKETS,[]);
        $json = $response->getBody()->getContents();
        $array = json_decode($json, true);
        return $array;
    }

    public function getBoard($product_code = null)
    {
        $response = $this->_client->get(Api::BOARD,[]);
        $json = $response->getBody()->getContents();
        $array = json_decode($json, true);
        return $array;
    }
}
