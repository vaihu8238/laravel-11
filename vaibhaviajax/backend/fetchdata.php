<?php
include "database.php";

$qry = "SELECT * FROM users ";

$res = $conn->query($qry);

// $result_arr = [];
// if(mysqli_num_rows($res) > 0)
// {
//     foreach($res as $row)
//     {
//         // $row['name'];
//         array_push($result_arr,$row);
//     }
//     header('content-type: application/json');
//     echo json_encode($result_arr);
    
// }
// else

// {
//     echo $return ="<h4> no record found </h4>" ;
// }

?>