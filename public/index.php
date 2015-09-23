<?php
/**
 * 邢帅教育
 * 本源代码由邢帅教育及其作者共同所有，未经版权持有者的事先书面授权，
 * 不得使用、复制、修改、合并、发布、分发和/或销售本源代码的副本。
 * @copyright Copyright (c) 2013 xsteach.com all rights reserved.
 */
define('YII_DEBUG', true);
define('YII_ENV_DEV', true);
require_once(__DIR__ . '/../vendor/autoload.php');

class Application extends \yii\web\Application
{

}

$config = include_once '../configs/main.php';
$app    = new Application($config);
$app->run();