<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

		$nama_drink = $_POST['nama_drink'];
		$tekstur = $_POST['tekstur'];
		$size = $_POST['size'];
		$tempat = $_POST['tempat'];
		$price_drink = $_POST['price_drink'];
		$pemesan = $_POST['pemesan'];
		

				$sql = "INSERT INTO drink (nama_drink,tekstur,size,tempat,price_drink,nama_pemesan) VALUES ('$nama_drink','$tekstur','$size','$tempat','$price_drink','$pemesan')";

				require_once('../koneksi.php');

				if(mysqli_query($con,$sql)) {
				echo 'Drink successfully entered';
				} else {
				echo 'Failed!';
				}

		mysqli_close($con);
	}
