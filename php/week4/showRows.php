<?php
$DBServer ='localhost';
$DBUser ='root';
$DBPass ='vimmey';
$DBName ='zenrays1';
$output = '';
$conn = new mysqli($DBServer,$DBUser,$DBPass,$DBName);

if($conn->connect_error) {
	trigger_error("Database connection failed". $conn->connect_error, E_USER_ERROR);
}
else
echo "connected.<br>";

// $sql='SELECT * from first';

// $rs1=$conn->query($sql);

// if($rs1 === false) {
// 	trigger_error('Wrong sql : '.$sql . 'Error : ' .$conn->connect_error, E_USER_ERROR);
// }else {
// 	$rows_returned = $rs1->num_rows;
// 	echo $rows_returned. '</br>'
// }



$sql_insert="INSERT INTO first(userid,name,password,emalId,phone) VALUES('7','swati','swati','swati78@gmail.com', '6789')";
$rs =$conn->query($sql_insert);
if($rs === true) {
	 echo "New record created successfully";
}else{
	trigger_error("Database insertion failed". $conn->connect_error, E_USER_ERROR);
}

while ($row = $rs->fetch_object()) {

	$output = "<table border = '4'>
				<tr>
					<td>$row->userid</td>
					<td>$row->name</td>
					<td>$row->password</td>
					<td>$row->phone</td>
					<td>$row->emailId</td>
				</tr></table>";

				echo $output;
}
echo "$conn->insert_id";
$conn->close();

