<?php

//匿名函数的使用
$message = 0;
$array = array(1,2,3);

// 没有 "use"
$example = function ($v,$k)
{
    $v += 2;
    echo $v;
    //var_dump($message)."</br>";
    //return $message;
};

$hh = array_walk($array,$example);
//echo $hh;


