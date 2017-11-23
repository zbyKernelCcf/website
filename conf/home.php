<?php

return [
    'work_address' => 'home',

    // 视图输出字符串内容替换
    'view_replace_str'       => [
        'css/'       => '/indy_blog_dev_version/public/static/admin/css/',
        'js/'        => '/indy_blog_dev_version/public/static/admin/js/',
        'img/'       => '/indy_blog_dev_version/public/static/admin/img/',
    ],

    'database'=> [
        // 开启断线重连  # 这个不知道屌不屌 。 看官方手册加的
        'break_reconnect' => true,
        // 数据库类型
        'type' => 'mysql',
        // 服务器地址 w
        'hostname'        => 'bdm248126202.my3w.com',
        // 数据库名
        'database'        => 'bdm248126202_db',
        // 用户名
        'username'        => 'bdm248126202',
        // 密码
        'password'        => '826726721',
        // 连接dsn
        'dsn' => '',
        // 数据库连接参数 # 这里面可以
        'params' => [
//        \PDO::ATTR_PERSISTENT   => true, # 这个是长连接
        ],
        // 数据库编码默认采用utf8
        'charset' => 'utf8',
        // 数据库表前缀
        'prefix' => '',
        // 数据库调试模式
        'debug' => true,
        // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
        'deploy' => 0,
        // 数据库读写是否分离 主从式有效
        'rw_separate' => false,
        // 读写分离后 主服务器数量
        'master_num' => 1,
        // 指定从服务器序号
        'slave_no' => '',
        // 是否严格检查字段是否存在
        'fields_strict' => true,
        // 数据集返回类型
        'resultset_type' => 'array',
        // 自动写入时间戳字段
        'auto_timestamp' => false,
        // 时间字段取出后的默认时间格式
        'datetime_format' => 'Y-m-d H:i:s',
        // 是否需要进行SQL性能分析
        'sql_explain' => false,
    ]
];