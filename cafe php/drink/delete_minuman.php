<?php 
	$no = $_GET['no'];
	
	require_once('../koneksi.php');
	
	$sql = "DELETE FROM drink WHERE no=$no;";
	
	if(mysqli_query($con,$sql)){
		echo 'Drink successfully deleted';
	}else{
		echo 'Failed!';
	}
	
	mysqli_close($con);
