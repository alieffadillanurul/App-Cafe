<?php 
	require_once('../koneksi.php');
	
	$sql = "SELECT * FROM snack";
	
	$r = mysqli_query($con,$sql);
	
	$result = array();

	while($row = mysqli_fetch_array($r))
	{
		array_push($result,array("no"=>$row['no'],"nama_snack"=>$row['nama_snack']));
	}
	
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
