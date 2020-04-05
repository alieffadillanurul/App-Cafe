<?php 
	$no = $_GET['no'];
	
	require_once('../koneksi.php');
	
	$sql = "SELECT * FROM drink WHERE no=$no";
	
	$r = mysqli_query($con,$sql);
	
	$result = array();

	$row = mysqli_fetch_array($r);
	
	array_push($result,array("no"=>$row['no'], 
							"nama_drink"=>$row['nama_drink'], 
							"tekstur"=>$row['tekstur'],
							"size"=>$row['size'],
							"tempat"=>$row['tempat'],
							"sprice_drink"=>$row['price_drink'],							
							"pemesan"=>$row['pemesan']));

	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
