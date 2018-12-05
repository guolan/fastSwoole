<?php
// +----------------------------------------------------------------------
// | fastSwoole [ WE CAN FAST MORE AND MORE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://fastSwoole.iorip.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Panco <1129443982@qq.com>
// +----------------------------------------------------------------------

/**
 * 应用核心配置项
 */
return [
    "debug" => true,  //调试模式
    "deamonize" => false,  //守护进程模式
    "host" => "0.0.0.0",  //0.0.0.0表示对外公开访问，127.0.0.1表示本机访问
    "port" => 8888,  //服务端口号
    "worker_num" => 8,  //服务进程数
    "force_route" => 0,  //强制路由模式，1开启，0关闭
    "max_cache_size" => 102400,  //最大缓存总数
];