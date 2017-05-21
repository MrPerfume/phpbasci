<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php


//实例：将一个<img>的宽度(400px)，变成原来的2倍。
//(1)定义变量
$width = "400px";
//(2)运算过程
$width *= 2; //展开后 $width = $width * 2
             //       $width = "400px" * 2 = 400*2 = 800
$width .= "px"; // 展开后 $width = 800."px"="800px"
//(3)输出结果
echo "图片现原宽度为：$width";



?>
