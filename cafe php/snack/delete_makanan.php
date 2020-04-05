<?php 
	$no = $_GET['no'];
	
	require_once('../koneksi.php');
	
	$sql = "DELETE FROM snack WHERE no=$no;";
	
	if(mysqli_query($con,$sql)){
		echo 'Snack Successfully deleted';
	}else{
		echo 'Failed!';
	}
	
	mysqli_close($con);
