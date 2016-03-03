<?php
//Inside myfirstprogram.php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "<table>";
	     echo "<tr>";
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

for ($a = 1; $a <= 100; $a++) 
	{
		if ($a==1)
		{
			echo "<td>".$a."</td>";
		}
	   echo "<td>".$a."</td>";
	}  
	 echo "</tr>";
for ($x = 1; $x <= 100; $x++) {
   echo "<tr>";
   echo "<td>".$x."</td>";

	for ($y = 1; $y <= 100; $y++) 
	{
		$z = $x * $y;
	    echo "<td>".$z."</td>";
	}  
	echo "</tr>";
} 

 echo "</table>";
?>