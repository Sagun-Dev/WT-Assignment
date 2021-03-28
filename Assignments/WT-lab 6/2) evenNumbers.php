<?php 
$number = 2;
$counter = 0;
while($counter < 20){
	if($number%2 == 0){
		echo $number."<br>";
		$counter=$counter+1;
	}
	$number = $number+1;
}
?>