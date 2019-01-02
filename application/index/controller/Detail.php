<?php
namespace app\index\controller;
use \think\Controller;
use think\Db;

class Detail extends Controller 
{
    public function detail()
    {
    	//文章
    	$article = Db::name('article')->select();
   /* $a = Db::name('article')->getLastSql();
    halt($a);*/
        return $this->fetch('detail',['article'=>$article]);
    }
}
