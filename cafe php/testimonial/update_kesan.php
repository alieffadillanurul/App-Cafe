<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$id = $_POST['id'];
		$fullname = $_POST['fullname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$kesan = $_POST['kesan'];
		
		require_once('../koneksi.php');

		$sql = "UPDATE k_pesan SET fullname = '$fullname', gender = '$gender', email = '$email', testimonial = '$testimonial' WHERE id = $id;";
		
		if(mysqli_query($con,$sql)) {
				echo "Testimonial Berhasil diupdate";
				} else {
				echo 'Testimonial Gagal dilakukan!';
				}
		
		mysqli_close($con);
	}