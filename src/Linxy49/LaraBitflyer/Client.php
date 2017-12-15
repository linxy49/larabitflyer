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
        $result = $this->_format(json_decode($json, true));
        return $result;
    }

    private function _format(array $data)
    {
        $asks = $this->_lastest($this->_sort($data['asks']), 10, false);
        $bids = $this->_lastest($this->_sort($data['bids']), 10, true);
        $result['price'] = $data['mid_price'];
        $result['asks'] = $asks;
        $result['bids'] = $bids;
        return $result;
    }

    /**
     *　ソート
     */
    private function _sort($array)
    {
        uasort($array, function ($a, $b) {
            if($a['price'] == $b['price']) {
                return 0;
            }
            return ($a['price'] > $b['price']) ? -1 : 1;
        });
        return $array;
    }

    /**
     * 最新の情報を取得する
     * @param $array
     * @param $length 件数
     * @param $type true:先頭 | false:末尾
     */
    private function _lastest($array, $length, $type)
    {
        if ($type) {
            return array_slice($array, 0, $length);
        } else {
            $count = count($array) - $length;
            return array_slice($array, $count, $length);
        }
    }
}
