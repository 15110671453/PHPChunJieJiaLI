<?php
/**
 * Created by PhpStorm.
 * User: thief
 * Date: 2017/1/21
 * Time: 下午9:09
 */

namespace FileHandler;


class StartPage
{
    private  $file;//文件内容
    private $current;//当前页
    private  $totalPage;//总的页数
    private $urlStr;
    private $pageLen;//每页显示的内容长度
    function __construct($file2,$len)
    {
        $this->file = file_get_contents($file2);
        $this->current=isset($_GET['page'])?$_GET['page']:1;
        $this->totalPage=$this->getTotalPage();
        $this->pageLen = $len;
        $this->urlStr=$this->getUrl();
        echo $this->urlStr.'</br>';

    }
    private  function getTotalPage()
    {
        return ceil(strlen($this->file)/$this->pageLen);
    }
    private  function  getUrl()
    {
      echo  $_SERVER['REQUEST_URI'].'</br>';
        echo  $_SERVER['QUERY_STRING'].'</br>';
        echo  $_SERVER['PHP_SELF'].'</br>';
       $url22= $_SERVER['REQUEST_URI'];
        parse_url($url22);
        return $_SERVER['QUERY_STRING'];
    }
}


$c = new StartPage('./b.text',12);
