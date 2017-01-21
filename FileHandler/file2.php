<?php
/**
 * Created by PhpStorm.
 * User: thief
 * Date: 2017/1/21
 * Time: 下午9:40
 */

//将文件内容按每行 数组形式返回
$array = file('./b.text');

foreach ($array as $k=>$v)
{
    if ($k%2==0)
    {
        echo  "<span style='color: #592553'>$v</span>".'</br>';
    }else
    {
        echo  "<span style='color: brown'>$v</span>".'</br>';

    }

}
//php includer path  include_path 设置 表明 当文件找不到时 到该目录下寻找
$array = file('./b.text',1);//在指定的文件路径下找不到文件 在php配置文件 includepath 下寻找
//给配置 可以通过函数 改变
set_include_path('./');

//文件复制  文件重命名  如果复制到的目下存在同名文件 怎么处理
// php的处理方式是替换掉  如何避免呢 复制粘贴前 先判断是否存在
if (!file_exists('./a.text'))
{
    copy('./b.text','./a.text');
}else
{
    echo '文件已经存在'.'</br>';
    if (rename('./a.text','./a2.text'))
    {
        echo '文件名修改成功'.'</br>';
    }
    //rename 用法 前后参数 文件路径一致 就是修改文件名  ；文件目录不一致 就是 移动文件到指定目录 文件名一致 或修改移动
    rename('./a2.text','../a/a3.text');

}
//时区设置
clearstatcache();//清除php的一些缓存 对文件修改时间进行了缓存 每次获取文件信息都检索文件 消耗多
date_default_timezone_set('PRC');
echo '文件的修改时间'.date('Y-m-d h:m:s',filectime('./a.php')).'</br>';
echo '文件内容的修改时间'.date('Y-m-d h:m:s',filemtime('./a.php')).'</br>';
//记录文件访问时间 很耗时间 没必要 所以很多系统是没必要支持记录 服务器环境配置中 都关闭掉的文件访问时间的更改
echo '文件内容的访问时间'.date('Y-m-d h:m:s',fileatime('./a.php')).'</br>';


















