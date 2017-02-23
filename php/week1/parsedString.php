<?php
$my_int = 50;
$string_one = "The value of the variable is $my_int<br>";	 //parsed string
$string_two = 'The value of the variable is $my_int<br>';	//unparsed string
echo $string_one;
echo $string_two;

$a='vmy ';
$b='chopra ';
$c ='hello<br>';
$fullname = $a.$b.$c;
echo $fullname;

$students = array('vmy', 'sumit', 'rashmi');
echo $students[2].'<br>';

$students1 = array(2 =>'sumit' , 3 => 'selvi', 5 => 'vmy' , 'raj');  //can skip address .. 
echo $students1[3].'<br>';

print_r($students1['raj']);
echo $students1[5].'<br>';

$students1 = array(2 =>'sumit' , ab => 'selvi', cd12 => 'vmy' );
echo $students1[cd12].'<br>';
echo $students1[1].'<br>';

foreach ($students1 as $key => $val) {
	echo ' '.$key.' And '.$val.'<br>';
}
	
// $students => array(
// 					'name' => 'sumit',
// 					 'students' =>array(
// 					 	'selvi' => array(
// 					 			'tamil',
// 					 			'selvi'
// 					 			),
// 					 	'shashank',
// 					 	'manju'
// 					 	)
// 					 );
// 					 echo $students['students'][1]; 


$a = array('green', 'red', 'yellow');
$b = array('avacado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);
echo $c['green'];





?>