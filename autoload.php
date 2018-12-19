<?php
//定义自动加载函数
spl_autoload_register(
    function (string $class) {
        static $classes = null;
        if ($classes === null) {
            $classes = [
                'class'    => 'file_path',
                'index' => 'application/controller/Index.php',
                'user' => 'application/controller/User.php',
                'order' => 'application/controller/Order.php',
            ];
        }
        //处理映射关系

        $map_class = strtolower($class);
        if (isset($classes[$map_class])) {
            $file = __DIR__ .DIRECTORY_SEPARATOR. $classes[$map_class];
        }else{
            //处理命名空间的映射关系
            $namespace_class = str_replace('\\',DIRECTORY_SEPARATOR,$class);
            $file = __DIR__ .DIRECTORY_SEPARATOR.$namespace_class.'.php';
        }



        if(is_file($file)) {
            require $file;
        }else{
            throw new \Exception("未找到{$map_class}");
        }

    },
    true,
    false
);
require(__DIR__ . '/vendor/autoload.php');
