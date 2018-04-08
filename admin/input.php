<?php
include '../asset/configuration/config.php';
session_start();
if (empty($_SESSION['username'])) {
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Article</title>
	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css">
	<script type="text/javascript" src="../asset/js/sweetalert.js"></script>
</head>
<body>

<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4" style="margin-top:100px;">

		<form action="" method="post">
			<input type="text" class="form-control" name="title" placeholder="masukan judul"><br>
			<textarea type="text" class="form-control" name="content" placeholder="masukan konten"></textarea><br>
			<input type="text" class="form-control" name="create" value="<?php echo $_SESSION['username'] ?>" readonly><br>
			<button class="btn btn-success" name="input">Input</button>
		</form>

		<br>
		<br>

		<?php

			if (isset($_POST['input'])) {
				$judul = $_POST['title'];
				$content = $_POST['content'];
				$create = $_POST['create'];

				$input = $sql->query("insert into tbl_artikel(title,content,createdBy)values('$judul', '$content', '$create')");


				if ($input==TRUE) {
					echo "<font class='alert alert-success'>Sukses</font>";
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