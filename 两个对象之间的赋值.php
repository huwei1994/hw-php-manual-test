<?php
//两个对象之间的赋值
class Test
{
	public $v;
    static public function getNew()
    {
        return new static;
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj1->v = 'hhh';
$obj2 = new Test();
$obj3 = new $obj1;
var_dump($obj1);var_dump($obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Test);