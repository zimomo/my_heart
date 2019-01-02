<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

/**
 * 后台公用基础控制器
 * Class AdminBase
 * @package app\common\controller
 */
class IndexBase extends Controller
{
    /**
     * 获取侧边栏菜单
     */
    protected function getMusic()
    {
       /* $music = Db::name('cpa_auth_rule')->where('status', 1)->order(['sort' => 'DESC', 'id' => 'ASC'])->select();

        foreach ($cpa_auth_rule_list as $value) {
            if ($auth->check($value['name'], $admin_id) || $admin_id == 1) {
                $menu[] = $value;
            }
        }
        $menu = !empty($menu) ? array2tree($menu) : [];*/
        $a = 1;

        $this->assign('a', $a);
    }
}