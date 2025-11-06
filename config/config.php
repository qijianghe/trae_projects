<?php
/**
 * 易宝支付配置文件
 */
return [
    // 商户编号
    'merchantNo' => 'your_merchant_no',
    // 商户密钥
    'secretKey' => 'your_secret_key',
    // 公钥（RSA签名时使用）
    'publicKey' => '',
    // 网关地址（沙箱环境）
    'gateway' => 'https://openapi-sandbox.yeepay.com',
    // 网关地址（生产环境）
    // 'gateway' => 'https://openapi.yeepay.com',
    // 支付成功返回地址
    'returnUrl' => 'http://your-domain.com/pay/return',
    // 支付结果异步通知地址
    'notifyUrl' => 'http://your-domain.com/pay/notify',
    // 退款结果异步通知地址
    'refundNotifyUrl' => 'http://your-domain.com/refund/notify',
    // 字符集
    'charset' => 'UTF-8',
    // 签名类型 (MD5/RSA)
    'signType' => 'MD5',
];