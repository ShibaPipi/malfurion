<?php

return [
    // 小程序app_id
    'app_id' => 'wx271b6178e48e105a',
    // 小程序app_secret
    'app_secret' => 'f4b9e30ce53a95a15a339547b10312f2',
    // 微信使用code换取用户openid及session_key的url地址
    'login_url' => "https://api.weixin.qq.com/sns/jscode2session?" . "appid=%s&secret=%s&js_code=%s&grant_type=authorization_code",
    // 微信获取access_token的url地址
    'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?" . "grant_type=client_credential&appid=%s&secret=%s",

];
