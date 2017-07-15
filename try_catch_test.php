<?php
//测试try catch 的用法

class A
{
	public function hh()
	{
		try 
		{
		    $error = 'Always throw this error';
		    throw new Exception($error);

		    // Code following an exception is not executed.
		    //echo 'Never executed';
		    return 111;

		} 
		catch (Exception $e) 
		{
		    //echo 'Caught exception: ',  $e->getMessage(), "\n";
		    //echo 111;
		    return 222;
		}
	}
}

$a = new A();
$b = $a->hh();
var_dump($b);

?>