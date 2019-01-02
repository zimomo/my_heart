<?php
namespace app\index\controller;
use \think\Controller;

class Photo extends Controller 
{
    public function photo()
    {
        return $this->fetch();
    }
}
