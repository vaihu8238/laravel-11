<?php

header('Content-Type: application/json');


$data = json_decode(file_get_contents("php://input"),true);


$id = $data['$id'];
$name = $data['name'];
$age = $data['age'];
$city = $data['city'];

include "config.php";

$sql = "UPDATE details SET name = '{$name}', age = '{$age} , city = '{$city} WHERE id = {$id}''";

if(mysqli_query($conn, $sql))
{
	echo json_encode(array('message' => ' Record Updated.', 'status' => true));
}
else
{
  echo json_encode(array('message' => ' Record Not Updated.', 'status' => false));
}

?>