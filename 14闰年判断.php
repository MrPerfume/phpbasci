<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php

//实例：判断用户输入的年份，是不是闰年
/*
	(1)能被4整除，且不能被100整除
	(2)能被400整除。
	(3)条件(1)和(2)的关系是或的关系
*/
$year = $_GET["year"];
if($year%4==0 && $year%100!=0 || $year%400==0)
{
	echo "{$year}是闰年";
}else
{
	echo "{$year}是平年";
}

?>
