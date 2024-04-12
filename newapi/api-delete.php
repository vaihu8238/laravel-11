<?php
header('Content-Type: application/json');


$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];

include "config.php";

$sql = "DELETE FROM details WHERE id = {$id}";

if(mysqli_query($conn, $sql)){
	
	echo json_encode(array('message' => ' Record Deleted.', 'status' => true));

}else{

 echo json_encode(array('message' => ' Record not Deleted.', 'status' => false));

} 

?>