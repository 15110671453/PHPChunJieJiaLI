<?php
/**
 * Created by PhpStorm.
 * User: thief
 * Date: 2017/1/16
 * Time: 下午9:57
 */

/*
 * 数组的出栈 入栈 函数
 *array_push 向数组末端添加一个或多个元素 入栈
 * array_pop 删除数组末端元素 出栈
 *
 *
 *
 *
 *
 * */

echo '<pre>';

$array = array('webname'=>'houdunwang','weburl'=>'sina.com');

array_pop($array);

print_r($array);

array_push($array,'baidu.com');

print_r($array);


$kaoti = array(
    array('name'=>'那些年','type'=>'input'),
    array('name'=>'奥运会是那年召开的','type'=>'radio'),
    array('name'=>'请填写一个遍历目录的函数','type'=>'textarea')
);

function timu($arr)
{
    if (!empty($arr))
    {
        $key = array_rand($arr,1);

        switch ($arr[$key]['type'])
        {
            case 'input':
                echo "()"
        }
    }
}

















