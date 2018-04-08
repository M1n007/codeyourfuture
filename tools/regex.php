<!DOCTYPE html>
<html>
<head>
	<title>Validasi</title>
</head>
<body>

	<center><b>VALIDATE</b></center>

	<form action="" method="get">
		<label><b>Validate User</b></label><br><br>
		<input type="text" name="username">
		<button name="user">Validate</button>
	</form>
	<?php
		if (isset($_GET['user'])) {

			$user = $_GET['username'];

			if (preg_match("/^[a-z]/", $user)) {  
				echo "valid"; 
			}else{
				echo "username harus terdiri a-z tidak kapital";
			}
		}

	?>

	<br>
	<br>
	<br>

	<form action="" method="get">
		<label><b>Validate Email</b></label><br><br>
		<input type="text" name="emaile">
		<button name="email">Validate</button>
	</form>
	<?php
		if (isset($_GET['email'])) {

			$email = $_GET['emaile'];

			if (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {  
				echo "ini email abang q"; 
			}else{
				echo "ini bukan email babang q";
			}
		}

	?>

	 <br>
	 <br>
	 <br>
	 <br>

	<form action="" method="get">
		<label><b>Validate Phone Number</b></label><br><br>
		<input type="text" name="phone">
		<button name="hp">Validate</button>
	</form>

	<?php

	if (isset($_GET['hp'])) {
		$hp = $_GET['phone'];

		if(preg_match("/^\(?\+?([0-9]{1,4})\)?([0-9]{11,12})$/", $hp) ) {
     		
     		echo "valid";
		} else {
		    echo "not valid";
		}
	}
	?>
</body>
</html>