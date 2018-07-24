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
    $wechat = new \WeChat\Script($config);

    // 4. 获取JSSDK网址签名配置
    $result = $wechat->getJsSign('http://a.com/test.php');

    var_export($result);

} catch (Exception $e) {

    // 出错啦，处理下吧
    echo $e->getMessage() . PHP_EOL;

}