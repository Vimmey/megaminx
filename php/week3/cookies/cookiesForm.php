<?php
$_city = $_COOKIE['city'];
$optionValue = array('Bangalore','Chennai','Pune');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>

	<form method="POST" action="cookies.php">
		<select name="city">
			<?php
			foreach ($optionValue as $value) {
				if ($value == $city) {
					echo "<option selected value = '$value'>$value</option>";
				}else {
					echo "<option value = '$value'>$value</option>";
				}
			}
			?>
			
		</select>
		<input type="submit" value="submit"></input>
		
	</form>
</body>
</html>