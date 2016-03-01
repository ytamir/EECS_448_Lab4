<?php
//Inside myfirstprogram.php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

for ($a = 1; $a <= 100; $a++) 
	{
		if ($a==1)
		{
			echo " $a ";
		}
	    echo "$a ";
	}  
	echo "<br>";
for ($x = 1; $x <= 100; $x++) {
   echo "$x ";

	for ($y = 1; $y <= 100; $y++) 
	{
		$z = $x * $y;
	    echo "$z ";
	}  
	echo "<br>";
} 

?>