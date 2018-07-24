<?php

// +----------------------------------------------------------------------
// | WeChatDeveloper
// +----------------------------------------------------------------------
// | 版权所有 2018~2022
// +----------------------------------------------------------------------
// | 官方网站: http://localhost
// +----------------------------------------------------------------------
// | huachun.xiang@qslb
// +----------------------------------------------------------------------
// | github开源项目：
// +----------------------------------------------------------------------

try {

    // 1. 手动加载入口文件
    include "../include.php";

    // 2. 准备公众号配置参数
    $config = include "./config.php";

    // 3. 创建接口实例
    $wechat = new \WeChat\Pay($config);

    // 4. 组装参数，可以参考官方商户文档
    $options = [
        'bill_date' => '20171001',
        'bill_type' => 'ALL',
    ];
    $result = $wechat->billDownload($options);

    var_export($result);

} catch (Exception $e) {

    // 出错啦，处理下吧
    echo $e->getMessage() . PHP_EOL;

}