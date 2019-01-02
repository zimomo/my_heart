<?php
namespace app\index\controller;
use \think\Controller;
use app\index\model\Me as MeModel;
use think\Db;


class Article extends Controller 
{
    public function article()
    {
    	//文章
    	$article = Db::name('article')->select();
        return $this->fetch('article',['article'=>$article]);
    }
}
