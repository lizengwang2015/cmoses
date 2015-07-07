<?php
/**
 *
 * @desc 启动脚本
 * @copyright Chuanke (c) 2015
 * @author Hector Li <lizengwang@gmail.com>
 * @version 2015年7月7日 14:41:26
 */

//全局设置
date_default_timezone_set('PRC');


//常量定义
define('M_ROOT',realpath(dirname(__FILE__)));


//启动
require M_ROOT.'/vendor/autoload.php';
