<?php
namespace myframe;

use ReflectionClass;
use ReflectionMethod;

class Container
{
    protected static $instance;
    protected $instances = [];
    public function make($class)
    {
        if (!isset($this->instances[$class])) {
          // 创建反射对象
          $reflect = new ReflectionClass($class);
          // 获取构造方法
          $constructor = $reflect->getConstructor();
          // 创建构造方法依赖的对象，将对象保存在$args中
          $args = $constructor ? $this->bindParam($constructor) : [];
          // 实例化类，并传入$args参数
          $this->instances[$class] = $reflect->newInstanceArgs($args);
        }
        return $this->instances[$class];
    }
    protected function bindParam(ReflectionMethod $reflect)
    {
        $args = [];
        $params = $reflect->getParameters();
        foreach ($params as $param) {
            $class = $param->getType();
            if ($class) {
                $args[] = $this->make($class->getName());
            }
        }
        return $args;
    }
    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

}
