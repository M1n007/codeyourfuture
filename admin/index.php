<?php
include '../asset/configuration/config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css">
	<script type="text/javascript" src="../asset/js/sweetalert.js"></script>
</head>
<body>

<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4" style="margin-top:100px;">
		<div class="panel">
			<div class="panel-body">
				username & password : admin
			</div>
		</div>
		</div>
		<form action="" method="post">
			<input type="text" class="form-control" name="user" placeholder="masukan username"><br>
			<input type="text" class="form-control" name="pass" placeholder="masukan password"><br>
			<button class="btn btn-success" name="login">Login</button>
		</form>
		<?php

			if (isset($_POST['login'])) {
				$username = $_POST['user'];
				$password = $_POST['pass'];

				$quer = $sql->query("SELECT * FROM tbl_user where username='$username' and password='$password'");
				$quer1 = mysqli_fetch_array($quer);

				if ($quer1==TRUE) {
					$_SESSION['username'] = $username;
					echo "test sukses";
					header("Location: input.php");
				}else{
					echo "gagal";
				}

			}

		?>
	</div>
	<div class="col-md-4"></div>
</div>

</body>
</html>