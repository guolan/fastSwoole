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
 * 应用配置
 */
return [
    // 调试模式
    "debug"        => env("DEBUG",1),
    // 守护进程
    "deamonize"    => env("DAEMONIZE",0),
    // 服务类型，支持http，tcp，udp，websocket，分别对应server目录下的四个同名文件，可以自己扩展
    "server_type"  => env("SERVER_TYPE","http"),
    // 0.0.0.0表示对外公开访问，127.0.0.1表示本机访问
    "host"         => env("HOST","0.0.0.0"),
    // 服务端口号
    "port"         => env("PORT",8001),
    // 服务进程数
    "worker_num"   => env("WORKER_NUM",8),
    // 强制路由模式
    "force_route"  => env("FORCE_ROUTE",0),
    // 是否使用数据库
    "use_db"       => env("USE_DB",0),
];