<?php

namespace Linxy49\LaraBitflyer;

/**
 * Bitflyer API consts class
 */
final class Api
{
    const ENDPOINT      = 'https://api.bitflyer.jp';

    /**
     *  HTTP Public API
     */
    /* マーケットの一覧 */
    const MARKETS       = '/v1/markets';
    /* 板情報 */
    const BOARD         = '/v1/board';
    /* Ticker */
    const TICKER        = '/v1/ticker';
    /* 約定履歴 */
    const EXECUTIONS    = '/v1/executions';
    /* 板の状態 */
    const GETBOARDSTATE = '/v1/getboardstate';
    /* 取引所の状態 */
    const GETHEALTH     = '/v1/gethealth';
    /* チャット */
    const GETCHATS      = '/v1/getchats';

    /**
     * HTTP Private API
     */
    /* API キーの権限を取得 */
    const ME_GETPERMISSIONS           = '/v1/me/getpermissions';
    /* 資産残高を取得 */
    const ME_GETBALANCE               = '/v1/me/getbalance';
    /* 証拠金の状態を取得 */
    const ME_GETCOLLATERAL            = '/v1/me/getcollateral';
    const ME_GETCOLLATERALACCOUNTS    = '/v1/me/getcollateralaccounts';
    /* 預入用アドレス取得 */
    const ME_GETADDRESS               = '/v1/me/getaddresses';
    /* 仮想通貨預入履歴 */
    const ME_GETCOININS               = '/v1/me/getcoinins';
    /* 仮想通貨送付履歴 */
    const ME_GETCOINOUTS              = '/v1/me/getcoinouts';
    /* 銀行口座一覧取得 */
    const ME_GETBANKACCOUNTS          = '/v1/me/getbankaccounts';
    /* 入金履歴 */
    const ME_GETDEPOSITS              = '/v1/me/getdeposits';
    /* 出金 */
    const ME_WITHDRAW                 = '/v1/me/withdraw';
    /* 出金履歴 */
    const ME_GETWITHDRAWALS           = '/v1/me/getwithdrawals';
    /* 新規注文を出す */
    const ME_SENDCHILDORDER           = '/v1/me/sendchildorder';
    /* 注文をキャンセルする */
    const ME_CANCELCHILDORDER         = '/v1/me/cancelchildorder';
    /* 新規の親注文を出す（特殊注文） */
    const ME_SENDPARENTORDER          = '/v1/me/sendparentorder';
    /* 親注文をキャンセルする */
    const ME_CANCELPARENTORDER        = '/v1/me/cancelparentorder';
    /* すべての注文をキャンセルする */
    const ME_CANCELALLCHILDORDERS     = '/v1/me/cancelallchildorders';
    /* 注文の一覧を取得 */
    const ME_GETCHILDORDERS           = '/v1/me/getchildorders';
    /* 親注文の一覧を取得 */
    const ME_GETPARENTORDERS          = '/v1/me/getparentorders';
    /* 親注文の詳細を取得 */
    const ME_GETPARENTORDER           = '/v1/me/getparentorder';
    /* 約定の一覧を取得 */
    const ME_GETEXECUTIONS            = '/v1/me/getexecutions';
    /* 建玉の一覧を取得 */
    const ME_GETPOSITIONS             = '/v1/me/getpositions';
    /* 証拠金の変動履歴を取得 */
    const ME_GETCOLLATERALHISTORY     = '/v1/me/getcollateralhistory';
    /* 取引手数料を取得 */
    const ME_GETTRADINGCOMMISSION     = '/v1/me/gettradingcommission';

}
