<?php
namespace App\Http\Controllers\Admin;

use myframe\DB;

class IndexController extends CommonController
{
    public function index()
    {
      $this->assign('server_info', [
        // 系统环境
        'server_version' => $this->request->server('SERVER_SOFTWARE'),
        // MySQL版本
        'mysql_version' => $this->getMySQLVer(),
        // 文件上传限制
        'upload_max_filesize' => ini_get('file_uploads') ? 
                                       ini_get('upload_max_filesize') : '已禁用',
        // 脚本执行时间
        'max_execution_time' => ini_get('max_execution_time') . '秒',
        // 服务器时间
        'server_time' => date('Y-m-d H:i:s', time())
      ]);    
      return $this->fetch('admin/index');
    }
    protected function getMySQLVer()
    {
        $db = DB::getInstance();
        $res = $db->fetchRow('SELECT VERSION() AS ver'); // 查询MySQL版本
        return $res ? $res['ver'] : '未知';
    }

}
