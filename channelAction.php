<?php
/**
 * Created by PhpStorm.
 * User: thief
 * Date: 2017/1/16
 * Time: 下午9:03
 */

namespace untitled;


class channelAction
{
    protected $config ;

    function __construct()
    {
        $this->config= include "private_config.php";

        print_r($this->config);
    }


    //增加栏目
    public function  channelAdd()
    {
          echo $this->config["db_port"];
    }
    //修改栏目
    public function channelEdit()
    {

    }

}

$c = new channelAction();

$c->channelAdd();