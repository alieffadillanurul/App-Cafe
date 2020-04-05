<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$no = $_POST['no'];
		$nama_makanan = $_POST['nama_makanan'];
		$size = $_POST['size'];
		$price_snack = $_POST['price_snack'];
		
		require_once('../koneksi.php');

		$sql = "UPDATE makanan SET nama_makanan = '$nama_makanan', size = '$size', price_snack = '$price_snack' WHERE no = $no;";
		
		if(mysqli_query($con,$sql)) {
				echo "Snack successfully updated";
				} else {
				echo 'Failed!';
				}
		
		mysqli_close($con);
	}
