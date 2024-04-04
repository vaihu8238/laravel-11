<?php 

include "database.php";

if($_POST['type']==1)
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];

    $sql = "insert into users (name,email,phone,city) values('$name','$email','$phone','$city')";

    $run = $conn->query($sql);

    if($run)
    {
        echo json_encode(array("status"=>200));
    }
}

if(count($_POST)> 0)
{
    if($_POST['type']==2)
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];

        $sq = "UPDATE users SET  name ='$name' , email='$email',phone='$phone',city='$city'  WHERE uid=$id";

        if(mysqli_query($conn,$sq))
        {
            echo json_encode(array("statusCode"=>200));
        }
        else
        {
            echo "Error: " . $sq . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}

if(count($_POST)> 0)
{
    if($_POST['type']==3)
    {
        $id=$_POST['id'];
        $del = "DELETE FROM `users` WHERE uid=$id";

        if(mysqli_query($conn,$del))
        {
            echo $id;
		} 
		else 
        {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);

        }
}

if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM users WHERE uid in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>
