<?php
//Inside myfirstprogram.php
error_reporting(E_ALL);
ini_set("display_errors", 1);

	$tall =$_GET["tall"];
	$middle =$_GET["middle"];
	$bday = $_GET["bday"];
	$mom = $_GET["mom"];
	$salary = $_GET["salary"];
	$total =0;
	/*echo "$tall";
	echo "$middle";
	echo "$bday";
	echo "$mom";
	echo "$salary";
*/
	echo "How Tall is Lebron James?<br>";
	echo "You chose: $tall  <br>";
	echo "The Correct Answer is: 2m<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";

	if($tall == "2m")
	{
		$total +=1;
	}

	echo "What is Lebron James's middle name?<br>";
	echo "You chose: $middle <br>";
	echo "The Correct Answer is: Raymone <br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
   if($middle == "Raymone")
	{
		$total +=1;
	}

	
	echo " When is Lebron James's Birthday?<br>";
	echo "You chose: $bday <br>";
	echo "The Correct Answer is: Dec 20<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	if($bday == "Dec 20")
	{
		$total +=1;
	}

	
	echo "What is Lberon James's mom's name?<br>";
	echo "You chose: $mom<br>";
	echo "The Correct Answer is: Gloria<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	if($mom == "Gloria")
	{
		$total +=1;
	}

	
	echo "What is Lebron's Salary?<br>";
	echo "You chose:$salary <br>";
	echo "The Correct Answer is: 24m <br>";

	echo "<br>";
	echo "<br>";
	echo "<br>";

	if($salary == "24m")
	{
		$total +=1;
	}


	if ($total ==0)
	{
	echo "You got a 0%";
	}
	else if ($total ==1)
	{
	echo "You got a 20%";
	}
	else if ($total ==2)
	{
	echo "You got a 40%";
	}
	else if ($total ==3)
	{
	echo "You got a 60%";
	}
	else if ($total ==4)
	{
	echo "You got a 80%";
	}
	else if ($total ==5)
	{
	echo "You got a 100%";
	}
	
?>