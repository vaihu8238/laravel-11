<?php
header('Contant-Type: application/json');


$data = json_decode(file_get_contents("php://input"), true);

$name = $data['sname'];
$age = $data['sage'];
$city = $data['scity'];

include "config.php";

$sql= "INSERT INTO details(name,age,city) VALUES('{$name}','{$age}','{$city}')";

$d = $conn->query($sql);
if($d)
{
    echo json_encode(array('message' => 'Record inserted.', 'status' => true));
}
else
{
    echo json_encode(array('message' => 'Record not inserted.', 'status' => false));
}
?>