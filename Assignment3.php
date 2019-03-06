<?php 
// Rewrite the script to display the content in a tabular format
$cars = array(
	"car1" => array("make" => "Toyota", "Color" => "Green", "year" => 1999,"engine_cc" => 1998), 
	"car2" => array("make" => "BMW", "Color" => "RED", "year" => 2005,"engine_cc" => 2400), 
	"car3" => array("make" => "Renault", "Color" => "White", "year" => 1993,"engine_cc" => 1395),
	"car4" => array("make" => "Skoda", "Color" => "White", "year" => 2000,"engine_cc" => 1600),
	"car5" => array("make" => "Mercedes", "Color" => "Black", "year" => 1995,"engine_cc" => 2200)
 ); 
?>

<!DOCTYPE html>
<html>
<body>
	<table border="1">
		<tr>
			<th>Make</th>
			<th>Color</th>
			<th>Year</th>
			<th>Engine</th>
		</tr>
		
		<?
		foreach ($cars as $key => $value) {
			echo "<tr>";
			foreach ($cars[$key] as $key2 => $value2) {
				echo "<td> $value2 </td>";
			}
			echo "</tr>";
		}
		?>
	</table>

	<br><br>

</body>
</html>

<?
// Search about Skoda made car if there is print the related information
foreach ($cars as $key => $value) {
	if ($cars[$key]["make"] == "Skoda") {
		echo "<h3> Information of ", $cars[$key]["make"], "</h3>";
     	foreach ($cars[$key] as $ky => $v) {
       		echo "<p>",  $ky , " : "  , $v , "</p>"; 
     	}
	}
}

// Print out the Fname in ascending order
echo "<br><br>";
$Fname = array ("oldbrother"=> "Ali", "midbrother"=> "Abed-alrhman", "youngbrother" => "Ahmad");
sort($Fname);
print_r($Fname);

?>
