<?php
namespace app\admin\controller;
use \think\Controller;
use \think\Session;

class Login extends Controller 
{
    public function index()
    {
        return $this->fetch();
    }
    /*
		执行登录
    */
     public function dologin()
    {
    	Session::set('admin_id','1');
        $this->success('登陆成功','admin/index/index');
    }
}
