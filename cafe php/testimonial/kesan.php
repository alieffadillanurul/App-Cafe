<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

		$fullname = $_POST['fullname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$testimonial = $_POST['testimonial'];

				$sql = "INSERT INTO pesan (fullname,gender,email,testimonial) VALUES ('$fullname','$gender','$email','$testimonial')";

				require_once('../koneksi.php');

				if(mysqli_query($con,$sql)) {
				echo 'Testimonial Berhasil!';
				} else {
				echo 'Testimonial Gagal!';
				}

		mysqli_close($con);
	}