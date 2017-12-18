<?php
class Message{
	var $name;
	var $time;
	var $content;
	function __construct($n,$t,$c){
		$this->name=$n;
		$this->time=$t;
		$this->content=$c;
	}
	function show(){
		echo "Name:".$this->name."<br>";
		echo "Time:".$this->time."<br>";
		echo "Content:".$this->content."<br>";
		echo"=================================";
		
	}
}
//$m =new Message("Ian","2017-12-16","I am Ian");
//$m->show();
//var_dump($m);
?>