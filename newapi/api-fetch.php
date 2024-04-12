<?php
header('Content-Type: application/json');

include "config.php";

$sql ="SELECT * FROM details";
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res) > 0 ){
	
	$output = mysqli_fetch_all($res, MYSQLI_ASSOC);
	echo json_encode($output);

}else{

 echo json_encode(array('message' => 'No Record Found.', 'status' => false));

}

?>