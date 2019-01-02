<?php
namespace app\admin\controller;
use \think\Controller;
use app\common\controller\AdminBase;

class Datalist extends AdminBase 
{
    public function datalist()
    {
        return $this->fetch();
    }
}
