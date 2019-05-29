<?php

namespace app\api\controller\v1;

use app\api\controller\BaseController;
use app\api\validate\IDMustBePositiveInt;
use app\common\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;

class Banner extends BaseController
{
//    protected $beforeActionList = [
//        'checkPrimaryScope' => ['only' => 'getBanner']
//    ];

    /**
     * 获取Banner信息
     * @url     /banner/:id
     * @http    get
     * @param int $id banner id
     * @return  array of banner item , code 200
     * @throws  BannerMissException
     */
    public function getBanner($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $banner = BannerModel::getBannerById($id);

        if (!$banner) {
            throw new BannerMissException();
        }

        return $banner;
    }
}