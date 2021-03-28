<?php
require_once("./Employee.php");
require_once("./Company.php");

$gces = new Company;
$gces->name = "Gandaki College of Engineering and Science";
$gces->address = "Lamachour-19 Pokhara";
array_push($gces->employees, new Employee("Subham", "Budi Bazar"));
array_push($gces->employees, new Employee("Sagar", "Baglung"));
array_push($gces->employees, new Employee("Sagun", "Batulechour"));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Address</th>
		</tr>
		<?php  
		foreach ($gces->employees as $employee) {
		?>
		<tr>
			<td><?=$employee->name ?></td>
			<td><?=$employee->address ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>