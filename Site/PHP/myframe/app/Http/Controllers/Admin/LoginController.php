<?php
namespace App\Http\Controllers\Admin;

// use myframe\Controller;
use App\User;
use myframe\Captcha;

class LoginController extends CommonController
{
    protected $checkLoginExclude = ['index', 'login', 'captcha', 'logout'];
    public function index()
    {
        echo $this->fetch('admin/login');
    }
    public function login(User $user)
    {
      $username = $this->request->post('username', '');
      $password = $this->request->post('password', '');
      $captcha = $this->request->post('captcha', '');
      if (!$this->checkCaptcha($captcha)) {
          $this->error('登录失败：验证码有误');
      }
      $user = new User();
      $data = $user->where(['username' => $username])->first();
      if (!$data) {
          $this->error('用户不存在');
      }
      // 判断密码是否正确（在后面的步骤中实现）
      if ($data['password'] != $this->passwordMD5($password, $data['salt'])) {
        $this->error('用户名或密码不正确');
      }
      $this->setLogin(['id' => $data['id'], 'name' => $data['username']]);
      $this->success('登录成功');
    
    }
    protected function passwordMD5($password, $salt)
    {
        return md5(md5($password) . $salt);
    }
    protected function setLogin(array $user = [])
    {
        $_SESSION['cms']['admin'] = $user;
    }
    public function logout()
    {
        $this->setLogin([]);	// 清除Session中的登录信息
        $this->redirect('/admin/login/index');
    }
    public function captcha(Captcha $captcha)
    {
        $code = $captcha->create();
        $this->setCaptcha($code);
        $captcha->show($code);
    }
    protected function setCaptcha($code)
    {
        $_SESSION['cms']['captcha'] = $code;
    }
    protected function checkCaptcha($code)
    {
        if (isset($_SESSION['cms']['captcha'])) {
            $captcha = $_SESSION['cms']['captcha'];
            unset($_SESSION['cms']['captcha']);	// 验证码只能验证一次
            return strtolower($code) === strtolower($captcha);
        }
        return false;
    }
    
}
