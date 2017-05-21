<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php

//实例：年龄是否符合当兵的年龄
//(1)获取地址栏中用户输入的年龄
$age = $_GET["age"];
//(2)判断是否符合当兵年龄
if($age>18 && $age<25)
{
	echo "恭喜，你可以来当兵了。";
}else
{
	echo "对不起，该干嘛干嘛去。";
}



?>
