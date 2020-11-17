<?php return [
    
    '数据库' => [
        /*
        *如果你的服务商不提供mysql请把类型改为sqlite,再把地址改为db文件的文件名。要带后缀（请务必重命名它,尽量复杂一些）
        *如果你的服务商不支持pdo,请把
        *pdo改为mysqli  （mysql）
        *pdo改为sqlite3   （sqlite）
        *如果你的服务商连上面所提到的一个都不支持，请先称赞一下自己，连这种辣鸡服务商都能找到(不愧是你)。然后直接换一家
        *不是虚拟主机的以上可以当没看见
        */
        '类型' => 'mysql',
        '方式' => 'pdo',
        '地址' => 'localhost',
        '用户名' => 'danmu',
        '密码' => 'SeFKsiJSGCwB8cDK',   
        '名称' => 'danmu',
    ],
    
    'is_cdn' => 0,  //是否用了cdn
    '限制时间' => 60, //单位s
    '限制次数' => 5, //在限制时间内可以发送多少条弹幕
    '允许url' => ['https://www.bidi.cc'],  //跨域  格式['https://abc.com','http://cba.com']   要加协议
    '安装' => 1
];