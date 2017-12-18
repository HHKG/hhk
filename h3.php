<?php
$days=31;
echo "<table width='700px' border='1px'>";

for($i=1;$i<=$days;$i++){
	echo "<tr>";
	for($j=0;$j<7;$j++){
		if($i>$days){
	echo "<td>{$i}</td>";
		}
		else{
			echo"<td>{$i}</td>";
		}
	$i++;
	}
	echo "</tr>";
}

echo "</table>";
?>