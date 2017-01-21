<?php
/**
 * Created by PhpStorm.
 * User: thief
 * Date: 2017/1/16
 * Time: 下午8:26
 */

//区间数 生成数组 前两个参数是起点数 终点数 第三个参数是步长

echo '<pre>';

$arr = range(1,10);

print_r($arr);

$strArr=range(1,20,2);

print_r($strArr);
echo "<table style='width:800px;' cellspacing='1' cellpadding='2'>";
foreach ($strArr as $str)
{
    echo '<tr>';
    foreach ($strArr as $td)
    {
        echo "<td style='border: solid 1px #333;'>{$td}</td>";
    }
    echo '</tr>';

}

echo "</table>";



//统计某个元素值 在数组中 出现的次数
//统计数组中值出现的次数 返回统计的数组

$arr2 = array(1,2,3,4,5,6,7,8,9,3,5,7,8,9,2,3,5,7,8,3,1,4,6,7);

$arr40 = array_count_values($arr2);

print_r($arr40);

// 回顾字符串的 填充

$str = "学习坚持";

$str2 = str_pad($str,40,'x',STR_PAD_LEFT);//40 表示填充后字符串的总长度为40


echo '</br>';
echo $str2;

$arr3 = array(1,2,3);

//这里对数组进行填充 扩充 第二个参数 5 如果是负数 在左侧添加 正数 在右侧添加  第三个参数为填充内容
$newArray = array_pad($arr3,5,9);

print_r($newArray);

$arr41= array(1,2,3,4,5,6,6,7,8,112,33);

//对数组中的 键值 （没说键名哦 也没必要哦 ） 进行乘积的运算
var_dump(array_product($arr41));


//
$array1 = array("weburl"=>"sina.com","webname"=>"向上");

$array2 = array("db_host"=>"localhost","db_user"=>"root","db_pas"=>"asd1453nmdmysql","db_port"=>"3306");



//数组合并 多个数组 中 有重名的键名 该怎么处理
$arr =  array_merge($array1,$array2);

//array_merge_recursive()  当发现两个数组中有相同键名时 新生成的数组 会是嵌套的二维数组


print_r($arr);


$config = array("weburl"=>"sina.com","wenname"=>"zaixian");

$caseLower =  array_change_key_case($config,CASE_UPPER);

print_r($caseLower);






















