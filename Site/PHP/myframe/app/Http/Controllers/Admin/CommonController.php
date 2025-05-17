<?php
namespace App\Http\Controllers\Admin;

use myframe\Controller;

class CommonController extends Controller
{
    protected $checkLoginExclude = [];
    protected function initialize()
    {
        // 启动session
        session_start();
        // 为项目创建Session，统一保存到cms数组中
        if (!isset($_SESSION['cms'])) {
            $_SESSION = ['cms' => []];
        }
        // 检查用户登录
        $action = $this->request->action();
        if (in_array($action, $this->checkLoginExclude)) {
            return;
        }
        if (empty($_SESSION['cms']['admin'])) {
            $this->redirect('/admin/login/index');	// 未登录，跳转到登录页面
        } else {
            $user = $_SESSION['cms']['admin'];		// 已登录，取出用户信息
            $this->assign('user', $user);
        }
        if (!$this->request->isAjax()) {
            $this->display('admin/layout');  // 如果不是Ajax请求，则返回布局
        }
    
    }
}
