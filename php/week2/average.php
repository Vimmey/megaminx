<?php
function sum(){
	$parameterArray = func_get_args();
	$sum = 0;
	for($i=0; $i<count($parameterArray); $i++) {
		$sum = $sum + $parameterArray[$i];	

	}
	$avg = $sum/count($parameterArray);
	return $avg;
	
}
	
$returnVal = sum(4,5,6,7).'<br>';
$returnValOne = sum(4,5,6,7,8);
echo  $returnVal;
echo  $returnValOne;

?>