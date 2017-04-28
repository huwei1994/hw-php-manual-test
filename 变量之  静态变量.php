<?php
//变量之  静态变量
function test()
{
    static $a = 0;//变量之  静态变量（看起来是每次进来都会初始化$a = 0）,其实只是在第一次初始化
    echo $a;
    $a++;
}

test();
test();
test();
test();
test();
test();