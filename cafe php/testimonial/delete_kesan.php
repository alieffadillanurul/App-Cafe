<?php 
	$id = $_GET['id'];
	
	require_once('../koneksi.php');
	
	$sql = "DELETE FROM k_pesan WHERE id=$id;";
	
	if(mysqli_query($con,$sql)){
		echo 'Successfully deleted testimonial data';
	}else{
		echo 'oops! Try Again!';
	}
	
	mysqli_close($con);