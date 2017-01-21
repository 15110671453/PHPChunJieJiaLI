<?php
/**
 * Created by PhpStorm.
 * User: thief
 * Date: 2017/1/16
 * Time: 下午9:06
 */

$config= include "db_config.php";
$admin = array("weburl"=>"sina.com","webname"=>"向上");
return array_merge($config,$admin);
