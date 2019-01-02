<?php
namespace app\admin\controller;
use \think\Controller;
use app\common\controller\AdminBase;

class Main extends AdminBase 
{
    public function main()
    {
        return $this->fetch();
    }
}

