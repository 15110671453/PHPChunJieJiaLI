<?php
/**
 * Created by PhpStorm.
 * User: thief
 * Date: 2017/1/21
 * Time: 下午8:24
 */

//$file = fopen('./a.php','r');
//
//while (!feof($file))
//{
//    fgetss($file,'1024','<div><style>');
//}

//fopen fread fclose 集合体

//$content = file_get_contents('http://baidu.com');
////echo $content;
//
//file_put_contents('./b.text','file put contents 写入');
////会把源文件清空 再 写入内容
//file_put_contents('./b.text',$content);


$str='那路上今生今世都fffffffffff会觉得很短时间看手机就是会计师考试';

echo $str2  = substr($str,0,7);

echo '</br>';

/*这里在截取字符时 会出现乱码 中文字符 utf8 3 gbk 2*/

function subs($str,$len)
{
    $stri ='';
    for ($i=0;$i<$len;$i++)
    {
        echo '</br>';
        echo  $i;
        if (ord(substr($str,$i,1))>0xa0)
        {
            $stri .= substr($str,$i,2);
            $i++;
//            $i++;
        }else
        {
            $stri .= substr($str,$i,1);
        }
    }
    return $stri;
}

$str3 = subs($str2,124);
echo '</br>';
echo $str3;
echo '</br>';
$len=strlen($str3);
echo  $len;







