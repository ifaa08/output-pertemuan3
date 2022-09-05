<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>respon</title>
	<style>
		body{
			background-image:url(img/apaa.jpg);
			background-size: cover;
			text-align: center;
		}
		h1{
			text-align: center;
			padding-top: 280px;
		}

	</style>
</head>
<body>
	<h1>Terimakasih sudah di isi</h1>
</body>
</html>
<?php
	session_start();
	$ip =$_POST['nama'];
	echo "nama=".$ip." ";
	$ew =$_POST['Nim'];
	echo "nim=".$ew." ";
	$_SESSION['name'] =$ip;
	$_SESSION['nm'] =$ew
?>