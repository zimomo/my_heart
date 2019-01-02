<?php
namespace app\index\controller;
use \think\Controller;
use app\index\model\Me as MeModel;
use think\Db;

class Index extends Controller 
{
    public function index()
    {
    	$this->me_model = new MeModel;
    	$me = $this->me_model->select();
    	//查询公告栏公告内容
    	$notice = Db::name('notice')->field('notice')->select();
    	$title = '沫缘';
    	//文章
    	$article = Db::name('article')->select();
    	//留言
    	$message = Db::name('message')->select();
    	//大事记
    	$thing = Db::name('thing')->select();
    	//分享
    	$share = Db::name('share')->select();

        return $this->fetch('index',['me'=>$me[0],'notice'=>$notice,'title'=>$title,'article'=>$article,'message'=>$message,'thing'=>$thing,'share'=>$share]);
    }
}
