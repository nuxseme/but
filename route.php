<?php
Toro::serve([
    '/' => 'Index', //默认控制器
    '/user' => 'User',
    '/order' => 'Order'
]);