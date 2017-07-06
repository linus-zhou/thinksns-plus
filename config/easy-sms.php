<?php

return [

    /*
    |--------------------------------------------------------------------------
    | HTTP 请求的超时时间
    |--------------------------------------------------------------------------
    |
    | 设置 HTTP 请求超时时间，单位为「秒」。可以为 int 或者 float。
    |
    */

    'timeout' => 5.0,

    /*
    |--------------------------------------------------------------------------
    | 默认发送配置
    |--------------------------------------------------------------------------
    |
    | strategy 为调度器，默认使用「顺序调度器」，可选值有：
    |       - \Overtrue\EasySms\Strategies\OrderStrategy::class  顺序调度器
    |       - \Overtrue\EasySms\Strategies\RandomStrategy::class 随机调度器
    |
    | gateways 设置可用的发送网关，可用网关：
    |       - alidayu 阿里云信
    |       - alidayu 阿里大于
    |       - yunpian 云片
    |       - submail Submail
    |       - luosimao 螺丝帽
    |       - yuntongxun 容联云通讯
    |       - huyi 互亿无线
    |       - juhe 聚合数据
    |       - sendcloud SendCloud
    |       - baidu 百度云
    |
    */

    'default' => [
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,
        'gateways' => ['alidayu'],
    ],

    /*
    |--------------------------------------------------------------------------
    | 发送网关配置
    |--------------------------------------------------------------------------
    |
    | 可用的发送网关，基于网关列表，这里配置可用的发送网关必要的数据信息。
    |
    */

    'gateways' => [
        'alidayu' => [
            'app_key' => null,
            'app_secret' => null,
            'sign_name' => null,
        ],
    ],
];
