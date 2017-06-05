<?php

//情况一：
/*class Test{
 public function __destruct(){
  echo "执行析构函数";
 }
 }
$test1=new Test;
$test2=$test3=$test1;
unset($test1);
unset($test2);
unset($test3);
echo "<hr/>";//这种情况会先输出文本，再输出分割线，因为要使用unset,必须要将这个类所有对象都删除了，才会调用析构函数。所以这里是先调用析构函数，再调用分割线

unset($test1);
echo "<hr/>";*/ //这会先输出分割线，再才输出文本（这是因为脚本执行结束调用的析构函数，而不是因为unset函数的作用）

//情况二：
/*class A{
	public function __destruct()
	{
		echo 'hhh'.'</br>';
	}
}

$a = new A;
$b = $a;*/
//echo 1,'</br>';
//unset($a);(如果没有后面的代码了)会输出 hhh，因为这个程序脚本执行完了，也会执行析构函数
//echo 2,"</br>";
//unset($b);// 如果有后面这些代码，unset($a)是不会调用析构函数的
//echo 3,"</br>";

//情况三：
 class student
 { 
	 //属性 
	 private $no; 
	 private $name; 
	 private $gender; 
	 private $age; 
	 
	 private static $count=0; 
	 function __construct($pname) 
	 { 
		 $this->name = $pname; 
		 self::$count++; 
	 } 
	 
	 function __destruct() 
	 { 
	 	self::$count--; 
	 } 
	 
	 static function get_count() 
	 { 
	 	return self::$count; 
	 } 
 } 
 
 $s1=new student("Tom"); 
 print(student::get_count()); 
 
 $s2=new student("jerry"); //$s2 = $s1结果就会使 1 1 1 0
 print(student::get_count()); 
 
 $s1=NULL; 
 print(student::get_count()); 
 
 $s2=NULL; 
 print(student::get_count());//结果1 2 1 0，$s1和$s2是两个不同的对象，所以都会执行析构函数，执行一次，数量减一 