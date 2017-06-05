<?php

//对象
//数组转化成对象，对象转化成数组
$obj = (object) array('1' => 'foo','hh' => 'lll');
var_dump($obj)."</br>";
var_dump($obj->{'1'})."</br>";//null
var_dump($obj->hh)."</br>";//lll 有值
var_dump(isset($obj->{'1'}))."</br>"; // outputs 'bool(false)'
var_dump(key($obj))."</br>"; // outputs 'int(1)'
foreach((object) array('1' => 'foo','hh' => 'lll') as $k=>$v)
{
	var_dump($v)."</br>";  //数字键需要循环才能访问，字符键名直接可以访问
}

//创建一个空对象
$genericObject = new stdClass();
var_dump($genericObject)."</br>";

//创建一个空对象并赋值
$object = (object) [
    'propertyOne' => 'foo',
    'propertyTwo' => 42,
  ];
var_dump($object->propertyOne)."</br>"; //
var_dump('增加点东西，不然提交不了');