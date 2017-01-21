<?php
/**
 * Created by PhpStorm.
 * User: thief
 * Date: 2017/1/15
 * Time: 下午1:23
 */

/*
 *  count 统计数组中元素的个数
 * reset 把数组内部指针移动到数组第一个元素 并返回值
 * end 将数组内部指针移动到数组最后一个元素 并返回当前值
 * next 将数组指针向下移动一位 并返回当前指针 如果到结尾返回false，特殊情况 如果当前元素的值为空 或 0 也返回false
 *current 返回当前数组当前指针指向的数组元素  也是如果当前元素是空值也返回假
 * key 返回当前指针指向的数组中元素的键名
 * prev 将数组内部指针 向上移动一位 并返回当前指针 如果到结尾返回false，特殊情况 如果当前元素的值为空 或 0 也返回false
 * */
$arr = array('baidu.com',array('php课程','csss'),'解决为难','解决为难1','解决为难2','解决为难3','解决为难4' ,array('php课程','csss'));

echo "<pre>";
echo count($arr);

//echo each($arr);

print_r(each($arr));

//echo  each($arr);

print_r(each($arr));


//echo  reset($arr);

print_r(reset($arr));

print_r(next($arr));

//echo end($arr);
echo "</br>";
print_r(end($arr));

echo "next do while";
$arr2 = array('baidu.com',array('php课程','csss'),'解决为难','解决为难1','解决为难2','解决为难3','解决为难4' ,array('php课程','csss'));

do{
   print_r(current($arr2))   ;
}while(next($arr2));