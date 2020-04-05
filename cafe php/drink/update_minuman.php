<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$no = $_POST['no'];
		$nama_drink = $_POST['nama_drink'];
		$tekstur = $_POST['tekstur'];
		$size = $_POST['size'];
		$tempat = $_POST['tempat'];
		$price_drink = $_POST['price_drink'];
		$pemesan = $_POST['pemesan'];
		
		require_once('../koneksi.php');

		$sql = "UPDATE minuman SET nama_drink = '$nama_drink', tekstur = 'tekstur', size = '$size', tempat = '$tempat', price_drink = '$price_drink', pemesan = '$pemesan' WHERE no = $no;";
		
		if(mysqli_query($con,$sql)) {
				echo "Drink successfully Updated";
				} else {
				echo 'Failed!';
				}
		
		mysqli_close($con);
	}
