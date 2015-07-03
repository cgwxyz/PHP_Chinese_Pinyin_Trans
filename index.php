<?php

require('Pinyin.class.php');

Pinyin::option(array('uppercase'=>false,'only_first'=>false,'delimter'=>'','first_upper'=>true,'only_chinese'=>false));
echo Pinyin::trans('中华人民共和国');


exit();
//定义项目名称和路径
define('APP_NAME', 'form');
define('APP_PATH', './');
// 开启调试模式
define('APP_DEBUG',TRUE);
// 加载框架入口文件
require( "../ThinkPHP/ThinkPHP.php");