<?php
namespace app\index\controller;
use \think\Controller;
use app\index\model\Me as MeModel;
use think\Db;

class Zhangchengsb extends Controller 
{
    public function index($name = '')
    {
        if ($name) {
            $arr = [
                '傻逼',
                '纯傻逼',
                '纯种傻逼',
                '太几把傻逼',
            ];
            $result = $name . $arr[array_rand($arr,1)];
            return $result;
        } else {
            return '你是不是傻逼？名字都不知道写？';
        }
    }
}
