<?php 
	$no = $_GET['no'];
	
	require_once('../koneksi.php');
	
	$sql = "SELECT * FROM snack WHERE no=$no";
	
	$r = mysqli_query($con,$sql);
	
	$result = array();

	$row = mysqli_fetch_array($r);
	
	array_push($result,array("no"=>$row['no'], 
							"nama_snack"=>$row['nama_snack'], 
							"size"=>$row['size'], 
							"price_snack"=>$row['price_snack']));

	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
