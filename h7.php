<?php
echo "变量（\$string1)直接赋值为null:";
$string1 =null;
$string3 ="str";
if(is_null($string1))
	echo "string2 = null";
	echo "<p>变量(\$string2)未被赋值：";
	if(is_null($string2))
		echo "string2 =null";
	echo "<p>被unset()函数处理过的变量(\$string3):";
	unset($string);
	if(is_null($string3))
		echo "string3 = null";
	?>
	