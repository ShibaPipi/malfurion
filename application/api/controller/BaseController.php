<?php

namespace app\api\controller;

use app\common\service\Token;
use think\Controller;

class BaseController extends Controller
{
    /**
     * @throws \app\lib\exception\ForbiddenException
     * @throws \app\lib\exception\TokenException
     * @throws \think\Exception
     */
    protected function checkExclusiveScope()
    {
        Token::needExclusiveScope();
    }

    /**
     * @throws \app\lib\exception\ForbiddenException
     * @throws \app\lib\exception\TokenException
     * @throws \think\Exception
     */
    protected function checkPrimaryScope()
    {
        Token::needPrimaryScope();
    }

    /**
     * @throws \app\lib\exception\ForbiddenException
     * @throws \app\lib\exception\TokenException
     * @throws \think\Exception
     */
    protected function checkSuperScope()
    {
        Token::needSuperScope();
    }
}