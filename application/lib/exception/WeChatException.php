<?php

namespace app\lib\exception;

class WeChatException extends BaseException
{
    public $code = 400;
    public $msg = 'WeChat Unknown Error';
    public $errorCode = 999;

}