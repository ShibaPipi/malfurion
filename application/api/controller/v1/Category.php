<?php

namespace app\api\controller\v1;

use app\common\model\Category as CategoryModel;
use app\lib\exception\CategoryException;

class Category
{
    public function getAllCategories()
    {
        $categories = CategoryModel::all([], 'img');    // 等价于->with('img')->select()
        if ($categories->isEmpty()) {
            throw new CategoryException();
        }
        return $categories;
    }
}