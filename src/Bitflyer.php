<?php

namespace Linxy49\LaravelBitflyer;

use Http\CurlHandle;

class Bitflyer
{

    const DEFAULT_USERAGENT    = 'laravel-bitflyer';
    private $api_key;
    private $api_secret;
    private $user_agent;
    private $curl_handle;
    private $last_request;

    /**
     * construct
     *
     * @param string|null $api_key
     * @param string|null $api_secret
     */
    public function __construct($api_key = null, $api_secret = null)
    {
        $this->api_key = $api_key;
        $this->api_secret = $api_secret;
        $this->user_agent = self::DEFAULT_USERAGENT;
        $this->curl_handle = new CurlHandle();
        $this->last_request = null;
    }

    /**
     * [public] get markets
     *
     * @return array
     *
     * @throws ServerResponseFormatException
     * @throws BitflyerClientException
     */
    public function getMarkets()
    {
        // HTTP GET
        $json = $this->get('/v1/markets');
        // check return type
        if (!is_array($json)){
            throw new ServerResponseFormatException('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
}
