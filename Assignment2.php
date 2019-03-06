<!DOCTYPE html>
<html>
<body>
	<!-- #1 Define an associative array for Arab countries presidents (up to 5 countries) -->
	<?php 
	$presidents = array('Palestine' => "President 1", 'Egypt' => "President 2", 
		'Jordan' => "President 3", 'Syria' => "President 4", 'Lebanon' => "President 5");
	?>

	<!-- #2 Define an array of faculties of IUG each with its dean name and the highest and
	lowest averages of its students. A report to be generated as web page to display the 
	information -->

	<?php
	$faculties = array ( 
	 	"IT" => array ("Dean" => "dean 1", "highest average" => "99", "lowest average" => "69"), 
	 	"Science" => array("Dean" => "dean 2", "highest average" => "95", "lowest average" => "65"),
	 	"Engineering" => array ("Dean" => "dean 3", "highest average" => "90", "lowest average" => "60"), 
	 	"Law" => array("Dean" => "dean 4", "highest average" => "99", "lowest average" => "60") 
	); 
    ?>

	<table border="1">
	 	<tr>
	 		<th>Faculty</th>
	 		<th>Dean</th>
	 		<th>Highest Average</th>
	 		<th>Lowest Average</th>
	 	</tr>

	 	<?php for(reset($faculties); $k = key($faculties); next($faculties)) { ?> 
	 		<tr>
	 			<td><? echo $k; ?></td>
	 			<td><? echo $faculties[$k]["Dean"]; ?></td>
	 			<td><? echo $faculties[$k]["highest average"]; ?></td>
	 			<td><? echo $faculties[$k]["lowest average"]; ?></td>
	 		</tr>
	 	<?php } ?>
	</table>

	<br><hr><br>

	<!-- #3 Redefine $stdGrads  as an associative array, the Indices are the names of your 
	registered courses last semester and the values are your grades. These cript  print the 
	contents in tabular format with the GPA in the table foot -->

	<?php
    $stdGrads = array ("Web Development 1" => 99, "Data Structures" => 94, "Softwaare Engineering" => 98, 
		"Mathematics" => 95, "Calculus" => 89);
	?>
	<table border="1">
		<tbody>	
		<?php
		    $total = 0;  	
		    for(reset($stdGrads); $k = key($stdGrads); next($stdGrads)){
		    	$total += $stdGrads[$k];
		?>
	      	<tr> 
	      		<th> <? echo $k;?> </th> 
	      		<td> <?echo $stdGrads[$k]; ?> </td>
	      	</tr>
		<?php } ?>
		</tbody>

		<tfoot>
		  	<tr> <th colspan="2"> <? echo $total/count($stdGrads);?> </th> </tr>
	    </tfoot>
	</table>

</body>
</html>