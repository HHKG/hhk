<?php
echo '使用(integer)操作符转换变量$num类型';
echo (integer)$num;
echo '<p>';
echo '输出变量$num的值：'.$num;
echo '<p>';
echo '使用settype函数转换变量$num类型：';
echo settype($num,'integer');
echo '<p>';
echo '输出变量$num的值：'.$num;
?>
		