<?php
session_start();
//Dinh nghia duong dan he thong
define('PATH_SYSTEM', __DIR__ . '/system');
define('PATH_APPLICATION', __DIR__ . '/user');
define('PATH_SERVICE','http://localhost:8080');
define('PATH_ROOT', __DIR__);
//Lay thong so cau hinh
include_once(PATH_SYSTEM . '/config/config.php');
include_once(PATH_ROOT. "/system/core/DB_connect.php");
include_once(PATH_ROOT.'/setting.php');
$segment = array(
    'controller' => "",
    'action' => array()
);
$segment['controller'] = empty($_GET['c']) ? CONTROLLER_DEFAULT : $_GET['c'];
$segment['action'] = empty($_GET['a']) ? ACTION_DEFAULT : $_GET['a'];
include_once(PATH_SYSTEM . '/core/FT_Controller.php');
$controller = new FT_Controller();
$controller->load($segment['controller'], $segment['action']);
?>
