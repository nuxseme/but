<?php
require(__DIR__ . '/autoload.php');

//钩子函数  过滤器
ToroHook::add('before_request',function ($params){
    print_r($params);
});

ToroHook::add('404',function (){
    echo '404 not found';
});

ToroHook::add('after_request',function ($params){
    print_r($params);
    echo 'after_request',PHP_EOL;
});
ToroHook::add('after_request',function (){
    echo 'after_request 2',PHP_EOL;
});

ToroHook::add('before_handler',function ($params){
    print_r($params);
});
ToroHook::add('after_handler',function ($params){
    print_r($params);
});

require_once 'route.php';
