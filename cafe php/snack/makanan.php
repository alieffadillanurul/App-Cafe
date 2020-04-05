<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

		$nama_makanan = $_POST['nama_makanan'];
		$size = $_POST['size'];
		$price_snack = $_POST['price_snack];
		

				$sql = "INSERT INTO makanan (nama_makanan,size,price_snack) VALUES ('$nama_makanan','$size','$price_snack')";

				require_once('../koneksi.php');

				if(mysqli_query($con,$sql)) {
				echo 'Snack successfully entered';
				} else {
				echo 'Failed!';
				}

		mysqli_close($con);
	}
