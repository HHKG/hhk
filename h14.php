<?php
function zdy(){
	static $message=0;
	$message +=1;
	echo $message."";
}
function zdy1(){
	$message=0;
	$message +=1;
	echo $message."";
}
for($i=0;$i<10;$i++)
	zdy();
	echo "<br>";
	for($i=0;$i<10;$i++)
		zdy1();
	echo "<br>";
	
?>