<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

	$elephant = $_GET["elephant"];
	$kitten = $_GET["kitten"];
	$turtle = $_GET["turtle"];
	$username = $_GET["username"];
	$password = $_GET["password"];
	$ship = $_GET["ship"];
	$numelephant = (int)$elephant;
	$costelephant = $numelephant * 100;
	$numkitten = (int)$kitten;
	$costkitten = $numkitten * 30;
	$numturtle = (int)$turtle;
	$costturtle = $numturtle * 50;
	$shipnum = 0;
	$shipvar;
	if ($ship=="0") {
		$shipnum = 0;
		$shipvar = "Free";
	}
	else if ($ship=="50") {
		$shipnum = 50;
		$shipvar = "Express";
	}
	else if ($ship=="5") {
		$shipnum = 5;
		$shipvar = "Saver";
	}
	echo "Welcome $username , your password is $password";
$total= $costelephant + $costkitten + $costturtle + $shipnum;


 	 echo "<table>";
	     echo "<tr>";
		     echo "<td>".$username."</td>";
		     echo "<td>Quanity</td>";
		     echo "<td>Cost Per Item</td>";
		     echo "<td>Sub total</td>";
	      echo "</tr>";
	      echo "<tr>";
		     echo "<td>Elephant</td>";
		     echo "<td>".$elephant."</td>";
		     echo "<td>100$</td>";
		     echo "<td>".$costelephant."</td>";
	     echo "</tr>";
	      echo "<tr>";
		     echo "<td>Kitten</td>";
		     echo "<td>".$kitten."</td>";
		     echo "<td>30$</td>";
		     echo "<td>".$costkitten."</td>";
	     echo "</tr>";
	     echo "<tr>";
		     echo "<td>Turtle</td>";
		     echo "<td>".$turtle."</td>";
		     echo "<td>50$</td>";
		     echo "<td>".$costturtle."</td>";
	     echo "</tr>";
	     echo "<tr>";
		     echo "<td>Shipping</td>";
		     echo "<td>Type</td>";
		     echo "<td>".$shipvar."</td>";
		     echo "<td>".$shipnum."</td>";
	     echo "</tr>";
	     echo "<tr>";
		     echo "<td>Total</td>";
		     echo "<td>Cost For</td>";
		     echo "<td>Order</td>";
		     echo "<td>".$total."</td>";
	     echo "</tr>";

     echo "</table>";






?>
