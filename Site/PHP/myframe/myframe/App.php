<?php
namespace myframe;

use ReflectionMethod;
use Exception;

class App extends Container
{
    protected $request;
    protected $debug = true;
    protected $rootPath;
    public function __construct()
    {
      $this->instances[App::class] = $this;
      $this->request = $this->make(Request::class);
      $this->rootPath = dirname(__DIR__) . '/';
      DB::init(require $this->rootPath . 'config/database.php');
    }

    public function run()
    {
      try {
          $dispatch = $this->routeCheck();
          return $this->dispatch($dispatch);
      } catch (HttpException $e) {	// 新增代码
          return $e->getResponse();	// 新增代码
      } catch (Exception $e) {
          $msg = $this->debug ? $e->getMessage() : '';
          return Response::create('系统发生错误。'. $msg, 403);
      }
  
    }
    public function dispatch(array $dispatch)
    {
      list($controller, $action) = $dispatch;
      $this->request->setAction($action);
      $instance = $this->controller($controller);
      if (is_callable([$instance, $action])) {
          // 对$action方法进行反射
          $reflect = new ReflectionMethod($instance, $action);
      } else {
          $msg = '操作不存在：' ;
          $msg .= get_class($instance) . '->' . $action . '()';
          throw new Exception($msg);
      }
      // 创建$action方法依赖的对象，保存在$args参数
      $args = $this->bindParam($reflect);
      // 调用$action方法，传入$args参数
      $data = $reflect->invokeArgs($instance, $args);
      return Response::create($data);  
    }
    public function controller($name)
    {
        $class = '\\App\\Http\\Controllers\\' . $name;
        if (!class_exists($class)) {
            $msg = '请求的控制器' . $class . '不存在！';
            throw new Exception($msg);
        }
        return $this->make($class);
    }  
    public function routeCheck()
    {
        // $path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
        // $path = trim($path, '/');
        $path = $this->request->pathinfo();
        $controller = dirname($path);
        $action = basename($path);
        if ($controller === '' || $controller === '.') {
            $controller = 'Index';
        }
        if ($action === '') {
            $action = 'index';
        }
        $arr = explode('/', ucwords($controller, '/'));
        $controller = implode('\\', $arr) . 'Controller';
        $arr[] = $action;
        foreach ($arr as $v) {
            if (!preg_match('/^[A-Za-z]\w{0,20}$/', $v)) {
                $msg = '请求参数包含特殊字符！';
                throw new Exception($msg);
            }
        }
        return [$controller, $action];
    }
    public function getRootPath()
    {
        return $this->rootPath;
    }
    
}
