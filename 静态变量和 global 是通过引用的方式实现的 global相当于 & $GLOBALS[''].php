<?php
//http://blog.csdn.net/ytfrank2012/article/details/50530995网上的解释
//静态变量和 global 是通过引用的方式实现的 global相当于 & $GLOBALS['']


function test_global_ref() {
    global $obj;
    $obj = &new stdclass;
}

function test_global_noref() {
    global $obj;
    $obj = new stdclass;
}

test_global_ref();
var_dump($obj); //NULL
test_global_noref();
var_dump($obj); //object(stdClass)(0) {}


1 引用是什么 
Manual手册原话：在 PHP 中引用意味着用不同的名字访问同一个变量内容。这并不像 C 的指针：例如你不能对他们做指针运算，他们并不是实际的内存地址…… 查看引用不是什么了解更多信息。 替代的是，引用是符号表别名。注意在PHP 中，变量名和变量内容是不一样的， 因此同样的内容可以有不同的名字。最接近的比喻是 Unix 的文件名和文件本身——变量名是目录条目，而变量内容则是文件本身。引用可以被看作是 Unix 文件系统中的硬链接。

2 引用不是指针 
仍然看Manual中的例子：

<?php
function foo(&$var)
{
    $var =& $GLOBALS["baz"];
}
foo($bar);
?>
这将使 foo 函数中的 var变量在函数调用时和bar 绑定在一起，但接着又被重新绑定到了 GLOBALS["baz"]上面。∗∗不可能通过引用机制将bar 在函数调用范围内绑定到别的变量上面，因为在函数 foo 中并没有变量 bar（它被表示为var，但是 $var 只有变量内容而没有调用符号表中的名字到值的绑定）**


**global $var; 当成是 $var =& $GLOBALS['var']; 的简写。
1
1
从而将其它引用赋给 var只改变了本地变量的引用。此时，将其它引用赋值给var,相当于重新绑定，得到了一个新的局部变量的绑定，同时也就失去了和原有全局变量之间的绑定。这样$var在函数内部有效，外部则无效了。**