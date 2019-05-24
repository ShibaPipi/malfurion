<?php

namespace app\lib\exception;

class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = 'Param err';
    public $errorCode = 10000;

}