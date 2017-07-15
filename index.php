<?php
/*$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
var_dump($arr);
// $arr is now array(2, 4, 6, 8)
unset($value); // 最后取消掉引用
var_dump($arr);*/

/*$arr = array(1, 2, 3, 4);
foreach ($arr as $value) {
    $value = $value * 2;
}
var_dump($arr);

$arr = array(1, 2, 3, 4);
$a = [];
foreach ($arr as $value) {
    $a[] = $value * 2;
}
var_dump($a);*/

/*foreach (array(1, 2, 3, 4) as &$value) {
    $value = $value * 2;
}
var_dump();*/

/*//下面的代码等同于 foreach
$arr = array('a','b');
//reset($arr);
while(list(,$value) = each($arr))
{
    echo "value:".$value;
}*/

//使用。list解包
$array = [
    [1, 2],
    [3, 4],
];

/*foreach ($array as list($a, $b)) {
    // $a contains the first element of the nested array,
    // and $b contains the second element.
    echo "A: $a; B: $b\n";
}*/
/*$arr=[1,2,3];
foreach ($arr as &$v){
    //nothing to do
}
/*foreach ($arr as $v){
    //nothing to do
}
var_export($arr);*/

public function hh($arr = array(1,2,3,4,5,6,7),$a = 3)
{
    $b = $arr;
    //每次从数组中,取出一个数字。让后将数组赋值给$c
    
}