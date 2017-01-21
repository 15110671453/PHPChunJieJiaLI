<?php
/**
 * Created by PhpStorm.
 * User: thief
 * Date: 2017/1/15
 * Time: 上午11:42
 */
//索引数组
$arr=array('李海','php视频教程','29','1992-05-08');


print_r($arr);

//关联数组

$arr2=array("uname"=>"江梅","uclass"=>"DIV+CSS","age"=>"44","birth"=>"1995-08-11");

echo "<pre>";
print_r($arr2);

$arr3=array(array("uname"=>"李满","age"=>"15"),array("uname"=>"小海","age" =>"38"));


print_r($arr3);


$arr4["PHP"]=array();
$arr5["PHP"][]="php基础知识";
$arr5["PHP"][]="字符串处理";
$arr5["PHP"][]="图像处理";
$arr5["PHP"][]="数据库操作";
$arr5["PHP"][]="模版引擎";
$arr5["PHP"][]="多案例实战开发";


$arr5["DIV"]=array();
$arr5["DIV"][]="HTML基础知识";
$arr5["DIV"][]="CSS面局";
$arr5["DIV"][]="JavaScript";
$arr5["DIV"][]="hack技术";
$arr5["DIV"][]="整站标准布局";

print_r($arr5);



foreach ($arr3 as  $values)
{
    if (is_array($values))
    {
        foreach ($values as $v)
        {
            echo "<span style='color:#f00;border:solid 2px #ccc'>$v</span>";
        }
    }else
    {
        echo "<span style='color:#f00;border:solid 2px #ccc'>$values</span>";
    }


}

foreach ($arr2 as $key=>$value)
{
    echo "<span style='color: aqua;border: solid 2px #abc'>$key $value</span>>";

}

//$arr6[test]=array(); //不加双引号报错。。。
$arr6["test"]=array();
$arr6["test"][]="xuexi";
$arr6["test"][]="jianchi";

$arr6[]="huibaocuo";

foreach ($arr6 as $key=>$value)
{


    echo "<div style='border:solid 1px #592553;margin-bottom: 1px;font-style: 14px'>";


    if (is_array($value))
    {
        foreach ($value as $k=>$v)
        {
            echo $k."=>".$v;
        }
    }else
    {
        echo "$key => $value";
    }
    echo "</div>";
}

$db = new mysqli('localhost','root','dyn123456','test') or die('连接错误');
$db->query("set names gbk");
$sql = "select * from user";

$result = $db->query($sql);

while ($row = $result->fetch_assoc())
{
    //上面指定拿出来的是关联数组 还是索引数组
    foreach ($row as $key=>$value)
    {
        echo $key."=>".$value."</br>";
    }
}

//字符串与数组
/*
 * 两个重要的函数 implode 把数组合成字符串
 * explode 将字符串分割成数组
 *
 * */


$arr30 = array('PHP课程','DIVCSS课程','Jquery','Javascript');

$str = implode(";",$arr30);//第一参数 数组拼接的 拼接符 数据源数组

echo  $str;

$arr31= array('上传图片路径1','上传图片路径2','上传图片路径3');

$str2 = implode(";",$arr31);

echo  "</br>";
echo  $str2;

echo  "</br>";

$arrTest=explode(";",$str2);

print_r($arrTest);

$arrTest1=array(1,2,3,4,5,6);

var_dump(in_array(11,$arrTest1));
var_dump(in_array(11,$arrTest1),true);//判断指明的值是否在数组中 并且数据类型也一致


$arrTest2 = array('url' => 'www.baidu.com','urlname'=>'baidu');

$arr_1 = each($arrTest2);//根据数组元素每一项 将原数组拆分为 对应的一个数组 每each一次 为一个数组元素生成数组 指针向下移动

print_r($arr_1);
$arr_1 = each($arrTest2);//根据数组元素每一项 将原数组拆分为 对应的一个数组
//（该数组 永远有四个key value 对 索引 对 关联 对 并且内容都是和原数组中的某一项数组元素有关）
// 每each一次 为一个数组元素生成数组 指针向下移动

print_r($arr_1);

$arr_2=array('list函数',' 只对索引数组有效');

list($a,$b)=$arr_2;//list 只对索引数组有效 each 可以将每一项数组元素变为数组 （该数组是有索引顺序的数组）

echo "</br>".$a."---".$b;

list($k,$v)=each($arr_2);

echo "</br>".$k."---".$v;


while (list($k,$v)=each($arr_2))
{
    echo "</br>".$k."---".$v;
}